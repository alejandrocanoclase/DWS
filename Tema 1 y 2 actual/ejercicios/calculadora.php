<?php

    class Calculadora{

        function __construct(){

        }


        function coeficienteBinomial($n, $k){
            return $this->factorial($n)/$this->factorial($k)*$this->factorial($n-$k);
        }

        function factorial($x){
            if($x == 0){
                return 1;
            }elseif($x > 0){
                $result = 1;
                while ($x > 0){
                    $result = $result * $x;
                    $x = $x -1;
                }
                return $result;
            }
        }

        function conviertBinarioDecimal($cadenaBits){
            
            $cadena = strrev($cadenaBits);
            $numero = 0;
            
            for ($i = 0; $i < strlen($cadenaBits); $i++){
                $numero = (2**$i)*$cadena[$i] + $numero;
            }

            return $numero;
            
        }

        function sumaNumerosPares($array){

            $total = 0;

            foreach ($array as $numero){
                if ($numero % 2 === 0){
                    $total = $numero + $total;
                }
            }

            return $total;

        }

        function esCapicua($cadena){

            try{
                $inversa = strrev($cadena);
                /*
                var_dump($cadena);
                var_dump($inversa);

                echo "<br>";
                */
                
                if ($cadena === $inversa){
                    return true;
                }else{
                    echo "0";
                    
                }
            }catch(Exception $e){
                echo "Ha petao";
            }

        }
        
        function sumaMatrices($matriz1, $matriz2){
            
            $resultadoMatriz = [];

            for ($i = 0; $i < count($matriz1); $i++){
                for ($j= 0; $j < count($matriz1[$i]); $j++){
                   $resultadoMatriz[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
                }
            }

            return $resultadoMatriz;


        }        

    }