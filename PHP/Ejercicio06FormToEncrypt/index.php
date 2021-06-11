<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form To Encrypt</title>
    </head>
    <body>
        <?php
            if(isset($_POST['varEntrada'])){
                $claveEncriptada = md5($_POST['varEntrada']);
                $claveEncriptada2 = sha1($_POST['varEntrada']);
                echo "Clave:" . $_POST['varEntrada'];
                echo "<br />";
                echo "Clave encriptada en md5 (128 bits o 16 pares hexadecimales):";
                echo "<br />";
                echo $claveEncriptada;
                echo "<br />";
                echo "Clave:" . $_POST['varEntrada'];
                echo "<br />";
                echo "Clave encriptada en md5 (128 bits o 16 pares hexadecimales):";
                echo "<br />";
                echo $claveEncriptada2;

            }
            else{
                echo "<html>";
                echo "<form method='POST'>";
                echo "<br />";
                echo "<label>Ingrese la clave a encriptar:</label>";
                echo "<input type='text' name='varEntrada'>";
                echo "<button type='submit'>Obtener encriptación</button>";
                echo "</form>";
                echo "</html>";
            }

        ?>
    </body>
</html>