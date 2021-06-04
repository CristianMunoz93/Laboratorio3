<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Respuesta</title>
    </head>
    <body>
        <?php
            echo "Valores pasados:";
            echo "<br />";
            echo "Nombre=" . $_GET['nombre'];
            echo "<br />";
            echo "Apellido=" . $_GET['apellido'];
        ?>
    </body>
</html>

