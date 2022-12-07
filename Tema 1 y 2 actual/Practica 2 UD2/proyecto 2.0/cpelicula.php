<?php

class Pelicula{

    
    private function init($id, $titulo, $año, $duracion, $sinopsis, $imagen, $votos, $idCategoria)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->año = $año;
        $this->duracion = $duracion;
        $this->sinopsis = $sinopsis;
        $this->imagen = $imagen;
        $this->votos = $votos;
        $this->idCategoria = $idCategoria;
    }
    

    function __construct()
    {
        
    }

    function leerPeliculas($id){
        require('conexionBD.php');
        
        $id_categoria = $id;
        $sanitized_categoria_id = mysqli_real_escape_string($conexion, $id_categoria);


        //$consulta = "SELECT * FROM T_PELICULAS WHERE idCategoria='" .$sanitized_categoria_id. "';";
        $consulta = "SELECT * FROM T_PELICULAS WHERE idCategoria='" .$sanitized_categoria_id. "';";
        $resultado = mysqli_query($conexion, $consulta);

        $peliculas = [];
        $contador = 0;

        if (!$resultado) {
            $mensaje = 'Consulta inválida: ' . mysqli_errno($conexion) . "\n";
            $mensaje .= 'Consulta realizada: ' . $consulta;
            die($mensaje);
        } else {
            if (($resultado->num_rows) > 0) {
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    
                    $peli = new Pelicula();
                    $peli->init($registro['id'], $registro['titulo'], $registro['año'], $registro['duracion_min'], $registro['sinopsis'], $registro['imagen'], $registro['votos'], $registro['idCategoria']);

                    $peliculas[$contador] = $peli;
                    $contador++;
                    
                    //echo $registro['titulo']. "<br>";
                }
            } else {
                echo "No hay resultados";
            }
        }

        return $peliculas;

    }

    function pintarPeliculas($peliculas)
    {

            foreach($peliculas as $pelicula){
            echo "<div class='cartelera'>";
            echo "<div class='cabeceraPeli'>";
            echo "<h2>".$pelicula->titulo."</h2>";
            echo "<p>Votos: ".$pelicula->votos."</p>";
            echo "</div>";

            echo "<div class='pelicula'>";

            echo "<p>".$pelicula->sinopsis."</p>";
            echo "<img class='imagenPeli' src='fotos/".$pelicula->imagen."' alt='imagen de la pelicula'>";

            echo "</div>";

            echo "<div class='piePeli'>";
            echo "<p>Duración: ".$pelicula->duracion." min</p>";
            echo "<p id='enlace'>Enlace, <a href='verFicha.php?id=".$pelicula->id."' target='_blank'>ver Ficha</a></p>";
            echo "</div>";
            echo "</div>";
            echo "<br>";
            }

    }


}