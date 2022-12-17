<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/votar.css">
    <title>Voto</title>
</head>
<body>
<div class='ripple-background'>
  <div class='circle xxlarge shade1'></div>
  <div class='circle xlarge shade2'></div>
  <div class='circle large shade3'></div>
  <div class='circle mediun shade4'></div>
  <div class='circle small shade5'></div>
</div>

    <?php
        require('conexionBD.php');

        $idPelicula = $_POST['idp'];
        $sanitized_categoria_id = mysqli_real_escape_string($conexion, $idPelicula);
        $consulta = "UPDATE T_PELICULAS SET votos = votos + 1 WHERE id='".$sanitized_categoria_id."';";
        $resultado = mysqli_query($conexion, $consulta);

        if($resultado){
            echo "
            <div class='texto'>
                <h1>¡Gracias por votar!</h1>
                <h2>Se ha registrado tu voto correctamente</h2>
                <p><a href='portada.php'>Pulsa aquí para volver a la página de inicio</a></p>
            </div>";
        }else{
            echo "
            <div class='texto'>
                <h1>Ha ocurrido un error registrando tu voto :(</h1>
                <h2>Intentalo más tarde</h2>
                <p><a href='portada.php'>Pulsa aquí para volver a la página de inicio</a></p>
            </div>";
        }
    ?>
</body>
</html>
