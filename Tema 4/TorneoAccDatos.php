<?php

class TorneoAccesoDatos
{

    function __construct()
    {
    }

    function obtener()
    {

        $conexion = mysqli_connect('localhost', 'root', '12345');
        if (mysqli_connect_errno()) {
            echo "Error al conectar a MySQL: " . mysqli_connect_error();
        }

        $consulta = mysqli_prepare($conexion, "SELECT titulo FROM T_Peliculas WHERE id_categoria = ?");
        $consulta->bind_param("s", $sanitized_categoria_id);
        $consulta->execute();

        $result = $consulta->get_result();

        $torneo = [];

        while ($myrow = $result->fetch_assoc()) {
            array_push($torneo,$myrow);
        }
    }
}
