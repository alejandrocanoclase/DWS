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
                    <li><a href="7_vocales.php">7. Vocales</a></li>
                    <li><a href="8_informacion.php">8. Informacion</a></li>
                    <li><a href="9_tryCatch.php">9. Try Catch</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <p>
                    <?php require 'funciones.php';
                        
                        ini_set('display_errors', 'On');
                        ini_set('html_errors',0);

                        getParameter("letra");
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

