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
                    <li><a href="0_hola_mundo.php">0. Hola Mundo PHP</a></li>
                    <li><a href="1_hola_mundo_comentarios.php">1. Hola Mundo con comentarios</a></li>
                    <li><a href="2_variables_y_tipos.php">2. Variables y tipos</a></li>
                    <li><a href="3_arrays_bucles.php">3. Arrays y bucles</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <p>
                    <?php
                        $personas = ["Carlos", "Oscar", "Jose"]
                    ?>
                    <ul>
                        <?php

                            foreach($personas as $persona){
                                echo "<li>$persona</li>";
                            }

                            echo "<br>";

                            // TODO: Modifica el código para que también se muestr el
                            // contenido del array

                            for ($i = 1; $i <= 10; $i++){
                                echo $i;
                                echo "<li>$personas[$i]</li>";
                            }

                            echo "<br>";

                            $contador = count($personas);
                            $i = 1;
                            while ($i <= $contador){
                                echo "$personas[1]";
                                echo $i++;
                            }

                            echo "<br>";

                            for($j = 0; $j < $contador;$j++){
                                echo "$j";
                            }
                            
                        
                        ?>
                    </ul>
                </p>
            </div>
            <div class="tercera_columna">asssa</div>
        </div>
        <div class="tercera_caja">ccc</div>
        <footer>Pie de pagina</footer>
    </div>
</body>
</html>

