<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_cuadrado_magico.css">
    <title>Práctia UD2</title>
</head>
<body>
<h1>CUADRADO MÁGICO</h1>
    <?php include('cuadrado.php');

    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
    
    $matriz = [
        [4, 9, 2],
        [3, 5, 7],
        [8, 1, 6]
    ];

    $cuadrado1 = new cuadrado($matriz);
    $cuadrado1->analizarCuadradoMagico();
    $cuadrado1->pintarCuadradoMagico();

    



?>
    
</body>
</html>
