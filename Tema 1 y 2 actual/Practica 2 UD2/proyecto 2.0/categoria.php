<?php

class Catergoria{

    function __construct()
    {
        
    }

    function pintarCategorias(){
        require('conexionBD.php');

        $consulta = "SELECT * FROM T_CATEGORIAS";
        $resultado = mysqli_query($conexion, $consulta);
    
        if (!$resultado) {
            $mensaje = 'Consulta inválida: ' . mysqli_errno($conexion) . "\n";
            $mensaje .= 'Consulta realizada: ' . $consulta;
            die($mensaje);
        } else {
            if (($resultado->num_rows) > 0) {
                echo "<ul>";
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    
                    echo "<li><a href='cartelera.php?id=".$registro['id']."' >".$registro['genero']."</a></li>" ;

                }
                echo "<ul>";
            } else {
                echo "No hay resultados";
            }
        }

    }

}