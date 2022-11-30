<html>
<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="style.css">
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
                <ul>
                    <li><a href="hola_mundo.php">0 Hola Mundo PHP</a></li>
                    <li><a href="pagina1.html">Segundo ejercicio</a></li>
                    <li><a href="2_variables_y_tipos.php">2 Variables y tipos</a></li>
                    <li><a href="3_arrays_bucles.php">3. Arrays y bucles</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <p>
                    <?php
                        
                        ini_set('display_errors', 'On');
                        ini_set('html_errors',0);

                        $matriz = array(
                            array(4,0,2),
                            array(6,7,9),
                            array(1,2,2)
                        );

                        $max_filas = count($matriz);

                        for ($fila = 0; $fila < $max_filas; $fila++){
                            echo "<p><b>Fila número $fila</b></p>";
                            $max_columnas_fila = count($matriz[$fila]);
                            for($columna = 0; $columna < $max_columnas_fila; $columna++){
                                echo "[".$matriz[$fila][$columna]."]";
                            }
                        }

                        for ($fila = 0; $fila < $max_filas; $fila++){
                            $max_columnas_fila = count($matriz[$fila]);
                            for($columna = 0; $columna < $max_columnas_fila; $columna++){
                                if ($matriz[$fila][$columna] == 7){
                                    echo "<br>$fila $columna";
                                    break;
                                }
                            }
                        }

                        
                        

                    ?>
                </p>
            </div>
            <div class="tercera_columna">asssa</div>
        </div>
        <div class="tercera_caja">ccc</div>
        <footer>Pie de pagina</footer>
    </div>
</body>
</html>

