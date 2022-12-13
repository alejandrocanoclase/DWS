<?php

class Pelicula {

    private function init( $id, $titulo, $año, $duracion, $sinopsis, $imagen, $votos, $idCategoria )
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

    function leerPeliculas( ) {
        require( 'conexionBD.php' );

        $id_categoria = $_GET['idc'];
       
        if(isset($_GET['orden'])){
            $orden = $_GET['orden'];
        }else{
            $orden = '';
        }


        switch($orden){
            case 1:
                $orden = "order by votos";
                break;
            case 2:
                $orden = "order by votos desc";
                break;
            case 3:
                $orden = "order by titulo";
                break;
            case 4:
                $orden = "order by titulo desc";
                break;
            default: 
                $orden = '';
            
        }

        $sanitized_categoria_id = mysqli_real_escape_string( $conexion, $id_categoria );

        $consulta = "SELECT * FROM T_PELICULAS WHERE idCategoria=" .$sanitized_categoria_id. " " .$orden.";";
        $resultado = mysqli_query( $conexion, $consulta );

        $peliculas = [];
        $contador = 0;

        if ( !$resultado ) {
            $mensaje = 'Consulta inválida: ' . mysqli_errno( $conexion ) . '\n';
            $mensaje .= 'Consulta realizada: ' . $consulta;
            die( $mensaje );
        } else {
            if ( ( $resultado->num_rows ) > 0 ) {
                while ( $registro = mysqli_fetch_assoc( $resultado ) ) {

                    $peli = new Pelicula();
                    $peli->init( $registro[ 'id' ], $registro[ 'titulo' ], $registro[ 'año' ], $registro[ 'duracion_min' ], $registro[ 'sinopsis' ], $registro[ 'imagen' ], $registro[ 'votos' ], $registro[ 'idCategoria' ] );

                    $peliculas[ $contador ] = $peli;
                    $contador++;
                }
            } else {
                echo 'No hay resultados';
            }
        }

        return $peliculas;

    }

    function pintarPeliculas( $peliculas )
 {

        foreach ( $peliculas as $pelicula ) {
            
            echo "<div class='pelicula'>";
            echo "<div class='cabeceraPeli'>";
            echo '<h2>'.$pelicula->titulo.'</h2>';
            echo '<p>Votos: '.$pelicula->votos.'</p>';
            echo '</div>';

            echo "<div class='centPeli'>";
            echo "<div class='imagenPeli'><img src='fotos/".$pelicula->imagen."' alt='imagen de la pelicula'></div>";
            echo '<p>'.$pelicula->sinopsis.'</p>';
            echo '</div>';

            echo "<div class='piePeli'>";
            echo '<p>Duración: '.$pelicula->duracion.' min</p>';
            echo "<p id='enlace'>Enlace, <a href='verFicha.php?idp=".$pelicula->id."&idc=".$pelicula->idCategoria."'>ver Ficha</a></p>";
            echo '</div>';
            echo '</div>';
            echo '<br>';
        }

    }

    function pintarFichaPelicula() {
        require( 'conexionBD.php' );

        $idPelicula = $_GET[ 'idp' ];
        $sanitized_categoria_id = mysqli_real_escape_string( $conexion, $idPelicula );
        $consulta = "SELECT * FROM T_PELICULAS WHERE id='" .$sanitized_categoria_id. "';";
        $resultado = mysqli_query( $conexion, $consulta );

        if ( !$resultado ) {
            $mensaje = 'Consulta inválida: ' . mysqli_errno( $conexion ) . '\n';
            $mensaje .= 'Consulta realizada: ' . $consulta;
            die( $mensaje );
        } else {
            if ( ( $resultado->num_rows ) > 0 ) {
                $registro = mysqli_fetch_assoc( $resultado );

                $peli = new Pelicula();
                $peli->init( $registro[ 'id' ], $registro[ 'titulo' ], $registro[ 'año' ], $registro[ 'duracion_min' ], $registro[ 'sinopsis' ], $registro[ 'imagen' ], $registro[ 'votos' ], $registro[ 'idCategoria' ] );

                echo "<div class='pelicula-Ficha'>";
                echo "<div class='cabeceraPeli-Ficha'>";
                echo '<h2>'.$registro[ 'titulo' ].'</h2>';
                echo '</div>';

                echo "<div class='dimg-Ficha'><img class='imagenPeli-Ficha' src='fotos/".$registro[ 'imagen' ]."' alt='imagen de la pelicula'></div>";
                echo '<p>'.$registro[ 'sinopsis' ].'</p>';

                echo "<div class='piePeli-Ficha'>";
                echo '<p>Duración: '.$registro[ 'duracion_min' ].' min</p>';
                echo '<p id="voto">Votos: '.$registro[ 'votos' ].'</p>';

                echo '</div>';
                echo '</div>';

            } else {
                echo 'No hay resultados';
            }
        }
    }
}