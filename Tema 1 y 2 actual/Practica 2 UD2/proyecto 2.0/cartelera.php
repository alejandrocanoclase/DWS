<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require('categoria.php');
        $cat = new Catergoria();
        $estilo = $cat->tipoGenero();
        echo '<link rel="stylesheet" href="css/'.$estilo.'">';
    ?>
    <title>Cartelera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Creepster&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <ul class="navegacion">
            <li><h1><a href="portada.php">Categorias de la cartelera</a></h1></li>
            <li><a id="ordenar" ><h2>Ordenar</h2></a>
            <ul>
				<li><a href="cartelera.php?idc=<?php echo $_GET['idc'] ?>&orden=1">Orden ascendemte por votos</a></li>
				<li><a href="cartelera.php?idc=<?php echo $_GET['idc'] ?>&orden=2">Orden descendente por votos</a></li>
				<li><a href="cartelera.php?idc=<?php echo $_GET['idc'] ?>&orden=3">Orden alfabetico ascendente</a></li>
				<li><a href="cartelera.php?idc=<?php echo $_GET['idc'] ?>&orden=4">Orden descendente descendente</a></li>
            </li>
        </ul>
    </nav>
    <div class="contenido">
        <?php
            require('cpelicula.php');
            ini_set('display_errors', 'On');
            ini_set('html_errors', 0);
            $peliculas = new Pelicula();
            $pelis = $peliculas->leerPeliculas();
            $peliculas->pintarPeliculas($pelis);
        ?>
    </div>
    <footer>
        Copy Right &copy 2022
    </footer>
</body>
</html>