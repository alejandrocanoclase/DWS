<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_cuadrado_magico.css">
    <title>Tests</title>
</head>
<body>

    <h1>Unit tests del objeto cuadrado</h1>
<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("cuadrado.php");

function test_cuadrado_1(){
    $matriz = [
        [4, 9, 2],
        [3, 5, 7],
        [8, 1, 6]
    ];

    $cuadrado = new cuadrado($matriz);
    $cuadrado->analizarCuadradoMagico();

    return ($cuadrado->magico == true);
}
function test_cuadrado_2(){
    $matriz = [
        [4, 9, 2,4],
        [3, 4, 7],
        [8, 1, 1]
    ];

    $cuadrado = new cuadrado($matriz);
    $cuadrado->analizarCuadradoMagico();

    return ($cuadrado->magico == false);
    
}
function test_cuadrado_3(){
    $matriz = [
        [4, 14, 15,1],
        [9, 7, 6,12],
        [5, 11, 10,8],
        [16,2,3,13]
    ];

    $cuadrado = new cuadrado($matriz);
    $cuadrado->analizarCuadradoMagico();

    return ($cuadrado->magico == true);

}
function test_cuadrado_4(){
    $matriz = [
        [4, 14, 15,1],
        [9, 7, 6,12],
        [5, 12, 10,8],
        [16,2,3,13]
    ];

    $cuadrado = new cuadrado($matriz);
    $cuadrado->analizarCuadradoMagico();

    return ($cuadrado->magico == false);
}
function test_cuadrado_5(){
    $matriz=[
        [15]
    ];

    $cuadrado = new cuadrado($matriz);

    return ($cuadrado->magico == true);


}
function test_cuadrado_6(){
    $matriz = [
        [4, 9, 2],
        [3, 5, 7],
        [8, 'a', 6]
    ];
    $cuadrado = new cuadrado($matriz);

    for ($i=0; $i < $cuadrado->tamanio ; $i++) { 
        for ($j=0; $j < $cuadrado->tamanio ; $j++) { 
            if(is_numeric($cuadrado->matriz)){
                $cuadrado->magico = false;
                throw new Exception("Hay una letra en la matriz");
            }
        }
    }
    


    

}
function test_cuadrado_7(){
    $matriz = [
        [4, 9, 2],
        [3, 5, 7],
        [8, 1, 6]
    ];

    $cuadrado = new cuadrado($matriz);
    $cuadrado->analizarCuadradoMagico();

    $r = true;
    if ($cuadrado->filas == false || $cuadrado->columnas == false || $cuadrado->diagonales == false) {
        $r = false;
    }

    return ($r == $cuadrado->magico);

}
function test_cuadrado_8(){
    $matriz = [
        [4, 9, 2],
        [3, 5, 7],
        [8, 1, 6]
    ];

    $cuadrado = new cuadrado($matriz);
    $cuadrado->analizarCuadradoMagico();

    $r = true;
    if ($cuadrado->filas && true || $cuadrado->columnas && true || $cuadrado->diagonales && true) {
        $r = true;
    }

    return ($r == $cuadrado->magico);
}   


function test($testAProbar){

    try{


        echo "<br>";
        $resultadoTest = $testAProbar();
        $mensaje = "El test ". $testAProbar. " ";
        $mensajeResultado = $resultadoTest ? "OK":"KO";
        if($resultadoTest){
            echo "<span class='verde'>$mensaje $mensajeResultado</span>";
        }else{
            echo "<span class='rojo'>$mensaje $mensajeResultado</span>";
        }
        
        

    }catch(Exception $e){
        echo "<br>"."Se ha producido una excepción al ejecutar: ". $testAProbar."<br>";
    }

}

// <--- TESTS --->

test("test_cuadrado_1");
test("test_cuadrado_2");
test("test_cuadrado_3");
test("test_cuadrado_4");
test("test_cuadrado_5");
test("test_cuadrado_6");
test("test_cuadrado_7");
test("test_cuadrado_8");

?>
</body>
</html>