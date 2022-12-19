<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/categoria.css">
    <title>Ocimax</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        require('categoria.php');
        
        $categorias = new Catergoria();
        $categorias->pintarCategorias();
    ?>
</body>
</html>