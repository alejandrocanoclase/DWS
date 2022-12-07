<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="portada.php">Peliculas super guays</a></h1>
    <?php
        require('cpelicula.php');
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        $idCategoria = $_GET['id'];
        //var_dump($idCategoria);

        $peliculas = new Pelicula();
        $pelis = $peliculas->leerPeliculas($idCategoria);
        $peliculas->pintarPeliculas($pelis);

    ?>
</body>
</html>