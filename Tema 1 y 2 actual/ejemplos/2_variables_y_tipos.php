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
                    <li><a href="0_hola_mundo.php">0 Hola Mundo PHP</a></li>
                    <li><a href="1_hola_mundo_comentarios.php">1 Hola Mundo con comentarios</a></li>
                    <li><a href="2_variables_y_tipos.php">2 Variables y tipos</a></li>
                    <li><a href="3_arrays_bucles.php">3. Arrays y bucles</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <p>
                    <?php
                        $numero_entero = 5;
                        $numero_flotante = 6.5;
                        $cadena = "Hi";

                        echo gettype($numero_entero). " " .$numero_entero . "<br>";
                        echo gettype($numero_flotante). " " .$numero_flotante . "<br>";
                        echo gettype($cadena). " " .$cadena . "<br>";

                        // PREGUNTA
                        // ¿Qué otros tipos existen en PHP?
                        // Prueba por ejemplo el tipo booleano

                        $prueba_variable_no_inicializada = $numero_entero * $x;
                        echo $prueba_variable_no_inicializada;
                        // ¿Qué ha pasado?
                        // ¿Cómo la variable $x no estaba inicializada ha cogido el valor por?
                        // Consejo: Inicializar las varibles al principio


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

