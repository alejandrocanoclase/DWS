<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/cartelera.css">-->
    <?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    
        if($_GET["cat"] == 1){
            echo '<link rel="stylesheet" href="./css/terror2.css">';
        }elseif($_GET["cat"] == 2){
            echo '<link rel="stylesheet" href="./css/anime2.css">';
        }
    
    ?>
    <title>Cartelera</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Creepster&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Barra de navegación -->
    <nav>
        <ul>
            <li><a href="categorias.php">Categoria de la cartelera</a></li>
        </ul>
    </nav>

    <!-- Cuerpo de la página -->

    <div id="caja" class="contenedor">
        <?php        
            require("pelicula.php");

            ini_set('display_errors', 'On');
            ini_set('html_errors', 0);

            $texto = "La película es protagonizada por Noomi Rapace, Michael Fassbender y Charlize Theron. 
            El argumento sigue a la tripulación de la nave espacial Prometheus a finales del siglo XXI, 
            a medida que exploran una avanzada civilización alienígena en busca de los orígenes de la humanidad.";

            /*
            $peli1 = new Pelicula("La fiesta de las salchichas", $texto, "prom.jpg");
            $peli1->pintarPelicula();
            $plei2 = $peli1;
            $plei2->pintarPelicula();
            $plei3 = $peli1;
            $plei3->pintarPelicula();
            */

            $prueba = new Pelicula();

            $datos = $prueba->leerDatos();

            

            foreach ($datos as $pelicula){
                $pelicula->pintarPelicula();
            }
                    
        ?>
    </div>

    <!-- Pie de página -->

    <footer>Copy Right &copy 2022</footer>

</body>
</html>