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
                    <li><a href="4_constantes.php">4. Constantes</a></li>
                    <li><a href="5_variables_super_globales.php">5. Varibales super globales</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <div>
                    <?php

                    function obtenerInformacion($variable)
                    {
                        $cadena = '[ ';
                        foreach ($variable as $key => $val) {
                            $cadena .= $key . '=>' . $val . ",<br>";
                        }

                        $cadena .= ']';
                        return $cadena;
                    }
                    ?>
                </div>
                <?php
                //+Tarea con solución: ¿Cómo mostrar uno de los valores de una de las variables?
                echo 'Variable $_SERVER[]' . $_SERVER["HTTP_USER_AGENT"] . "<br>";
                //-
                echo 'Variable $_GET' . obtenerInformacion($_GET);

                

                ?>
                <!-- Prueba a ejecutar el script con otra de las variables superglobales
                $_GLOBALS
                $_GET
                $_POST
                $_REQUEST
                $_ENV
                ...
                Investiga si hay más.
                -->
            </div>
            <div class="tercera_columna">asssa</div>
        </div>
        <div class="tercera_caja">ccc</div>
        <footer>Pie de pagina</footer>
    </div>
</body>

</html>