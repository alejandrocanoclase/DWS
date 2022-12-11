<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Pelicula</title>
    <?php
        require('categoria.php');
        $cat = new Catergoria();
        $estilo = $cat->tipoGenero();
        echo '<link rel="stylesheet" href="css/'.$estilo.'">';
    ?>
</head>
<body>
    <div class="contenido">
    <?php
    require('cpelicula.php');
    $peli = new Pelicula();
    $peli->pintarFichaPelicula();
    ?>

    <form action="votar.php" method="post" onsubmit="<?php refrescar() ?>">
        <input type="submit" value="votar">
        <input type="hidden" name="id" value="<?php echo $registro['id'];?>">
    </form>
    </div>
   
</body>
</html>

<?php 
    function refrescar(){
        session_start();
        if(!isset($_SESSION['already_refreshed'])){
            header("Refresh: 5");
            $_SESSION['already_refreshed'] = true;
        }
    }
?>