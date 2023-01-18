<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests</title>
</head>
<body>
    <?php

        ini_set('display_errors', 'On');
        ini_set('html_errors', 0);

        require('cpelicula.php');

        function test_cartelera1(){
            $peli = new Pelicula();

            $peli1 = new Pelicula();
            $peli2 = new Pelicula();
            $peli3 = new Pelicula();

            $peliculas = [$peli1,$peli2,$peli3];
                
            return is_null($peli->pintarPeliculas($peliculas));

        }

        function test_cartelera2(){

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

        test("test_cartelera1");
    ?>
</body>
</html>

