<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Base</title>
    </head>
    <body>
        <p>Todo lo escrito fuera de las marcas de php es entregado en la respuesta http sin pasar por el procesador php</p>
        <?php 
            echo "<hr />";
            echo "<p>Todo texto y/o html entregado por el procesador php usando la sentencia echo.</p>";
            echo "<hr />";
            $mivariable="valor1";
            echo "Sin usar concatenador"; echo "<span style='color:blue'> \$mivariable= </span>";echo $mivariable;
            echo "<br />";
            echo "Usando concatenador" . "<span style='color:blue'> \$mivariable= </span>" . $mivariable;
            echo "<hr />";
            $mivariable=true;
            echo "Variable tipo booleanas o logicas(verdadero)" . "<span style='color:blue'> \$mivariable= </span>" . $mivariable;
            $mivariable=false;
            echo "<br />";
            echo "Variable tipo booleanas o logicas(falso)" . "<span style='color:blue'> \$mivariable= </span>" . $mivariable;
            echo "<hr />";
            define("MICONSTANTE","valorConstante");
            echo "<span style='color:blue'> MICONSTANTE= </span>" . MICONSTANTE;
            echo "<br />";
            echo "Tipo de" . "<span style='color:blue'> MICONSTANTE= </span>" . gettype(MICONSTANTE);
            echo "<hr />";
            echo "<h3>Arreglos:</h3>";
            $aPalabra=[];
            $aPalabra=["Hola","Hello"];
            echo "<span style='color:blue'> \$aPalabra[0]= </span>" . $aPalabra[0];
            echo "<br />";
            echo "<span style='color:blue'> \$aPalabra[1]= </span>" . $aPalabra[1];
            echo "<br />";
            echo "Tipo de" . "<span style='color:blue'> \$aPalabra= </span>" . gettype($aPalabra);
            echo "<p>Se agregan por programas dos elementos nuevos:</p>";
            array_push($aPalabra,"ciao");
            array_push($aPalabra,"bonjour");
            echo "<h3>Todos los elementos originales y agregados:</h3>";
            echo "<ul>";
            foreach($aPalabra as $varPalabra){
                echo "<li>" . $varPalabra . "</li>";
            }
            echo "</ul>";
            echo "<br />";
            echo "<h3>Arreglo de dos dimensiones(diccionario)</h3>";
            $aDiccionarioBasico=[];
            $aOtro=[];
            array_push($aOtro,"adios");
            array_push($aOtro,"casa");
            array_push($aDiccionarioBasico,$aPalabra);
            array_push($aDiccionarioBasico,$aOtro);
            echo "<p>La variable \$aDiccionarioBasico tiene el siguiente tipo:</p>" . gettype($aDiccionarioBasico);
            echo "<br />";
            echo "<table style='border:solid'>";
            /*
            foreach($aPalabra as $varPalabra){
                echo "<tr>" . $varPalabra . "</tr>";
                foreach($aDiccionarioBasico as $varDiccionario){
                    echo "<td>" . $varDiccionario . "</td>";
                }
            }
            */
            echo "<tr>";
            echo "<td>" . $aDiccionarioBasico[0][0] . "</td>";
            echo "<td>" . $aDiccionarioBasico[0][1] . "</td>";
            echo "<td>" . $aDiccionarioBasico[0][2] . "</td>";
            echo "<td>" . $aDiccionarioBasico[0][3] . "</td>";
            echo "</tr>";
            //echo $aDiccionarioBasico[1][0];
            echo "</table>";

            echo "<h3>Variables tipo arreglo asociativo</h3>";
            $aAsociativo = ["codArticulo"=>"c0001","desArticulo"=>"jaguel","precio"=>20,"Cantidad"=>2];
            echo "Código de articulo:" . $aAsociativo['codArticulo'];
            echo "<br />";
            echo "Descripción del articulo:" . $aAsociativo['desArticulo'];
            echo "<br />";
            echo "Precio unitario:" . $aAsociativo['precio'];
            echo "<br />";
            echo "Cantidad:" . $aAsociativo['Cantidad'];
            echo "<br />";
            echo "Cantidad de elementos:" . count($aAsociativo);
            echo "<br />";
            echo "<p>Tipo de dato:</p>" . gettype($aAsociativo);
            echo "<hr />";
            echo "<h3>Expresiones aritmeticas</h3>";

            $x=3;
            $y=4;
            $z= ($x+$y);
            $m= $x * $y;
            $d= $x / $y;

            echo "La variable \$x tiene el siguiente valor:" . $x;
            echo "<br />";
            echo "La variable \$y tiene el siguiente valor:" . $y;
            echo "<br />";
            echo "La variable \$x tiene el siguiente tipo:" . gettype($x);
            echo "<br />";
            echo "La variable \$y tiene el siguiente tipo:" . gettype($y);
            echo "<br />";
            echo "Asi se imprime una expresión aritmetica de Suma (\$x+\$y):" . $z;
            echo "<br />";
            echo "Asi se imprime una expresión aritmetica de Multiplicación \$x*\$y :" . $m;
            echo "<br />";
            echo "Asi se imprime una expresión aritmetica de División \$x/\$y :" . $d;
            echo "<br />";
        ?>
    </body>
</html>