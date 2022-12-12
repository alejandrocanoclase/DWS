<?php
require('conexionBD.php');

$idPelicula = $_POST['idp'];
$sanitized_categoria_id = mysqli_real_escape_string($conexion, $idPelicula);
$consulta = "UPDATE T_PELICULAS SET votos = votos + 1 WHERE id='".$sanitized_categoria_id."';";
$resultado = mysqli_query($conexion, $consulta);

if($resultado){
    echo "
    <script>
        alert('Se ha registrado el voto correctamente'); 
        window.history.back();
    </script>";
}else{
    echo "
    <script>
        alert('ERROR: Hubo un problema a la hora de registrar el voto'); 
        window.history.back();
    </script>";
}
