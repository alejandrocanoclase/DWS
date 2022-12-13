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
                    
                    echo "<li><a href='cartelera.php?idc=".$registro['id']."' >".$registro['genero']."</a></li>" ;

                }
                echo "<ul>";
            } else {
                echo "No hay resultados";
            }
        }

    }

    function tipoGenero(){
        require("conexionBD.php");
        $idCategoria = $_GET['idc'];
        $sanitized_categoria_id = mysqli_real_escape_string($conexion, $idCategoria);
        $consulta = "SELECT estilo FROM T_CATEGORIAS WHERE id='" .$sanitized_categoria_id. "';";
        $resultado = mysqli_query($conexion, $consulta);

        if(!$resultado){
            echo "ha petado";
        }else{
            if($resultado->num_rows > 0){
                $registro = mysqli_fetch_assoc($resultado);
            return $registro['estilo'];
            }else{
                header('Location: error.html');
            }
        }
    }
}