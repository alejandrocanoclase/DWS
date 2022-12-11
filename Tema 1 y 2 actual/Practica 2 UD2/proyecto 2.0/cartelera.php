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
        <ul>
            <li><h1><a href="portada.php">Categorias de la cartelera</a></h1></li>
            <!--<li>Ordenar por votos ASC</li>
            <li>Ordenar por votos DESC</li>-->
        </ul>
    </nav>
    <div class="contenido">
        <?php
            require('cpelicula.php');
            ini_set('display_errors', 'On');
            ini_set('html_errors', 0);
        
            $peliculas = new Pelicula();
            $idCategoria = $_GET['idc'];
            $pelis = $peliculas->leerPeliculas($idCategoria);
            $peliculas->pintarPeliculas($pelis);
        ?>
    </div>
    <footer>
        Copy Right &copy 2022
    </footer>
</body>
</html>