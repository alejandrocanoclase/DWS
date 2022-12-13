<?php

class Pelicula
{

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

    function leerDatos($argumento)
    {
        $conexion = mysqli_connect('localhost', 'root', '1234');
        if (mysqli_connect_errno()) {

            echo "Error al conectar a MySQL: " . mysqli_connect_errno();
        }
        mysqli_select_db($conexion, 'cartelera_BD');
        $id_categoria = $_GET[$argumento];
        $sanitized_categoria_id = mysqli_real_escape_string($conexion, $id_categoria);


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
                    //echo $registro['titulo'];
                }
            } else {
                echo "No hay resultados";
            }
        }

        return $peliculas;
    }

    function pintarPelicula()
    {

        echo "<div class='cartelera'>";
        echo "<div class='cabeceraPeli'>";
        echo "<h2>$this->titulo</h2>";
        echo "<p>Votos: $this->votos</p>";
        echo "</div>";

        echo "<div class='pelicula'>";

        echo "<p>$this->sinopsis</p>";
        echo "<img class='imagenPeli' src='fotos/$this->imagen' alt='imagen de la pelicula'>";

        echo "</div>";

        echo "<div class='piePeli'>";
        echo "<p>Duración: $this->duracion min</p>";
        echo "<p id='enlace'>Enlace, <a href='verFicha.php?id=$this->id' target='_blank'>ver Ficha</a></p>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
    }
}
