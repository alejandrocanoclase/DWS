<?php

    $conexion = mysqli_connect('localhost', 'root', '1234');
    if (mysqli_connect_errno()) {

        echo "Error al conectar a MySQL: " . mysqli_connect_errno();
    }
    mysqli_select_db($conexion, 'cartelera_BD');

    


