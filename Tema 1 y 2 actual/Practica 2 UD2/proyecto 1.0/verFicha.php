<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pito</h1>
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        require('pelicula.php');

        $id = $_GET['id'];
        $peli = new Pelicula();

        $peli->leerDatos('id');
        $peli->pintarPelicula();

    ?>
</body>
</html>