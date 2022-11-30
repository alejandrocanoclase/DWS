<?php

    ini_set('display_errors', 'On');
    ini_set('html_errors',0);

    $frase ="el sapo no se lava el pie";

    escribir_frase($frase);

    function escribir_frase($frase){
        $vocales = ["a","e","i","o","u"];
        $contador = count($vocales);
        $resultado = $frase;

        echo "Frase original: " .$frase. "<br> <br>";

        for ($j=0; $j < $contador ; $j++) { 
            for ($i=0; $i < $contador; $i++) { 
                $resultado = str_replace($vocales[$i], $vocales[$j], $resultado);
            }
            echo $resultado . "<br>";
        }
        
        
    }

