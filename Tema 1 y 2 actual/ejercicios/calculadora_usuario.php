<html>

<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="contenedor">
        <div class="primera_caja">
            <a href="index.php">INICIO</a>
            <a href="pagina1.html">Primera página</a>
            <a href="pagina2.html">Segunda página</a>
        </div>
        <div class="segunda_caja">

            <div class="primera_columna">

            </div>
            <div class="segunda_columna">
                <p>
                    <?php require("calculadora.php");

                    ini_set('display_errors', 'On');
                    ini_set('html_errors', 0);

                    $prueba = new Calculadora();

                    echo "El factorial de 4 es " . $prueba->factorial(4);
                    echo "<br>";
                    echo "El coeficiente binominal de 2 y 3 es " . $prueba->coeficienteBinomial(2,3);
                    echo "<br>";
                    echo "El número bianrio 1010 en decimal es: ". $prueba->conviertBinarioDecimal("1010");
                    echo "<br>";
                    echo "La suma de los números pares 2,6,8,12 es: ". $prueba->sumaNumerosPares(array(1,2,5,6,8,9,11,12,13,15,17));
                    echo "<br>";
                    echo "La palabra Ana, es capicua: ". $prueba->esCapicua("heli") ;
                    $matriz1 = array(
                        array(2,3),
                        array(1,4)
                    );
                    $matriz2 = array(
                        array(6,8),
                        array(2,1)
                    );

                    echo "<br>";
                    
                    $pantalla = $prueba->sumaMatrices($matriz1, $matriz2);
                    
                    for ($i = 0; $i < count($matriz1); $i++){
                        for ($j= 0; $j < count($matriz1[$i]); $j++){
                           echo $pantalla[$i][$j];
                        }
                    }
                    
                    
                    
                    
                    
                    
                    
                    
                    ?>
                </p>
            </div>
            <div class="tercera_columna"></div>
        </div>
        <div class="tercera_caja"></div>
        <footer></footer>
    </div>
</body>

</html>