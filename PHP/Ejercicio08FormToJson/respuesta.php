<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="jquery.js" type="text/javascript"></script>
        <title>Respuesta servidor</title>
    </head>
    <body>
        <?php
            sleep(3);
            $objProveedor = new stdClass;

            $objProveedor->idUsuario = $_POST['idUsuario'];
            $objProveedor->login = $_POST['login'];
            $objProveedor->descripcion = $_POST['descripcion'];
            $objProveedor->apellido = $_POST['apellido'];
            $objProveedor->nombre = $_POST['nombre'];
            $objProveedor->fecNac = $_POST['fecNac'];

            $jsonProveedor=json_encode($objProveedor);

            echo $jsonProveedor;
        ?>
    </body>
</html>