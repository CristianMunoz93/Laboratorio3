<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables servidor</title>
</head>
<body>
    <?php
        echo "<h2>Variables de servidor</h2>";
        echo "<br />";
        echo "SERVER_ADDR:" . $_SERVER['SERVER_ADDR'];
        echo "<br />";
        echo "SERVER_PORT:" . $_SERVER['SERVER_PORT'];
        echo "<br />";
        echo "SERVER_NAME:" . $_SERVER['SERVER_NAME'];
        echo "<br />";
        echo "DOCUMENT_ROOT:" . $_SERVER['DOCUMENT_ROOT'];
        echo "<br />";

        echo "<h2>Variables de cliente</h2>";
        echo "REMOTE_ADDR:" . $_SERVER['REMOTE_ADDR'];
        echo "<br />";
        echo "REMOTE_PORT:" . $_SERVER['REMOTE_PORT'];
        echo "<br />";

        echo "<h2>Variables de Requerimiento</h2>";
        echo "SCRIPT_NAME:" . $_SERVER['SCRIPT_NAME'];
        echo "<br />";
        echo "REQUEST_METHOD:" . $_SERVER['REQUEST_METHOD'];
        echo "<br />";

        foreach ($_SERVER as $key_name => $key_value) {
            echo "<br />";
            echo $key_name;
        }
    ?>
</body>
</html>