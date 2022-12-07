<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocimax</title>
</head>
<body>
    <h1>Ocimax</h1>
    <?php
        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        require('categoria.php');
        
        $categorias = new Catergoria();
        $categorias->pintarCategorias();
        

    ?>
</body>
</html>