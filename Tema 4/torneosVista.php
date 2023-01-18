<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listado.css">
    <title>Document</title>
</head>
<body>
<h1> Listado de torneos </h1>
<table>
    <tr>
        <td>ID</td>
        <td>Nombre del torneo</td>
        <td>Fecha</td>
        <td>Estado</td>
        <td>Campeón</td>
    </tr>

    <?php
        require("torneosReglasNegocio.php");

        $torneosBL = new TorneosReglasNegocio();
        $datosTorneos = $torneosBL->obtener();
        
        foreach ($datosTorneos as $torneo)
        {
            echo "<tr>";
            echo "<td>";
            print($torneo->getID());
            echo "</td>";
            echo "<td>";
            print($torneo->getName());
            echo "</td>";
            echo "<td>";
            print($torneo->getDate());
            echo "</td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
                echo "<a href=''>Editar</a> <a href=''>Borrar</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>