<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables Objeto</title>
    </head>
    <body>
        <h1>Variables tipo objeto en PHP. Objeto renglon de pedido</h1>
        <?php
            $objRenglonPedido = new stdClass;
            echo "<span style='color:blue'> \$objRenglonPedido </span>";
            $objRenglonPedido->codArt="cp0001";
            $objRenglonPedido->descArt="jaguel 800gr";
            $objRenglonPedido->precio=30;
            $objRenglonPedido->cantidad=2;

            echo "<br />";
            echo "<br />";
            echo "Código de articulo:" . $objRenglonPedido->codArt;
            echo "<br />";
            echo "Descripción del articulo:" . $objRenglonPedido->descArt;
            echo "<br />";
            echo "Precio unitario:" . $objRenglonPedido->precio;
            echo "<br />";
            echo "Cantidad:" . $objRenglonPedido->cantidad;
            echo "<br />";
            echo "<p>Tipo de <span style='color:blue'> \$objRenglonPedido </span>:</p>" . gettype($objRenglonPedido);

            echo "<h3>Definamos arreglos de pedidos:</h3>";
            $renglonesPedido=[];
            array_push($renglonesPedido,$objRenglonPedido);
            array_push($renglonesPedido,$objRenglonPedido);
            echo "<span style='color:blue'> \$renglonesPedido </span>";

            echo "<br />";
            echo "<h3>Recorrer el arreglo de renglones:</h3>";
            foreach ($renglonesPedido as $objRenglonPedido) {
                echo "<br />";
                echo $objRenglonPedido->codArt;
                echo $objRenglonPedido->descArt;
                echo $objRenglonPedido->precio;
                echo $objRenglonPedido->cantidad;
            }
            echo "<br />";
            $objRenglonesPedido=new stdClass();
            $objRenglonesPedido->renglonesPedido=$renglonesPedido;
            $objRenglonesPedido->cantidadDeRenglones=count($renglonesPedido);
            echo "<h2>Producción de un objeto <span style='color:blue'> \$objRenglonesPedido </span> con dos atributos array renglonesPedido y cantidadDeRenglones</h2>";
            echo "Cantidad de renglones:" . $objRenglonesPedido->cantidadDeRenglones;

            echo "<br />";
            echo "<h2>Producción de un JSON jsonRenglones:</h2>";
            $jsonRenglones=json_encode($objRenglonesPedido);
            echo $jsonRenglones;
        ?>
    </body>
</html>