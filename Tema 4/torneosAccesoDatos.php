<?php

class TorneosAccesoDatos
 {

    function __construct()
 {
    }

    function obtener()
    {
        $conexion = mysqli_connect( 'localhost', 'root', '1234' );
        if ( mysqli_connect_errno() )
        {
            echo 'Error al conectar a MySQL: '. mysqli_connect_error();
        }
        mysqli_select_db( $conexion, 'pingpong_BD' );
        $consulta = mysqli_prepare( $conexion, 'SELECT id, nombre, fecha FROM T_TORNEOS ' );
        $consulta->execute();
        $result = $consulta->get_result();

        $torneos =  array();

        while ( $myrow = $result->fetch_assoc() ) 
 {
            array_push( $torneos, $myrow );

        }
        return $torneos;
    }
}
