<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Include</title>
    </head>
    <body>
        <?php
            echo "<h3>La longitud de los arreglos es:</h3>" . count($arreglo1);
            include_once("include.inc");
            include("include.inc");

            echo "<br />";
            echo "<h3>Las dos variablies de tipo array asociativo en el inc son:</h3>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo $arreglo1['nombre'];
            echo "</td>";
            echo "<td>";
            echo $arreglo1['apellido'];
            echo "</td>";
            echo "<td>";
            echo $arreglo1['fecha'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo $arreglo2['nombre'];
            echo "</td>";
            echo "<td>";
            echo $arreglo2['apellido'];
            echo "</td>";
            echo "<td>";
            echo $arreglo2['fecha'];
            echo "</td>";
            echo "</tr>";
            
            echo "</table>";
            echo "<h3>La longitud de los arreglos es:</h3>" . count($arreglo1);
        ?>
    </body>
</html>