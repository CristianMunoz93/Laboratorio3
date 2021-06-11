<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="jquery.js" type="text/javascript"></script>
        <title>Ajax PHP</title>
    </head>
    <body>
        <?php
            sleep(3);
            if(isset($_POST['clave'])){
                $claveEncriptada = md5($_POST['clave']);
                $claveEncriptada2 = sha1($_POST['clave']);
                echo "Clave:" . $_POST['clave'];
                echo "<br />";
                echo "Clave encriptada en md5 (128 bits o 16 pares hexadecimales):";
                echo "<br />";
                echo $claveEncriptada;
                echo "<br />";
                echo "Clave:" . $_POST['clave'];
                echo "<br />";
                echo "Clave encriptada en md5 (128 bits o 16 pares hexadecimales):";
                echo "<br />";
                echo $claveEncriptada2;

            }

        ?>
    </body>
</html>