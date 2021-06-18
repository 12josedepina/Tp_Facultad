<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManejoVariables</title>
</head>
<body>
    <h1>Variables tipo objeto en PHP.Objeto renglon de pedido</h1>
    <?php
    echo "<h2><font color= 'blue'>\$objRenglonPedido</font></h2>";
    $objRenglonPedido= new stdclass;

    $objRenglonPedido->codArt= "cp001";
    $objRenglonPedido->desArt= "miel 800 gr";
    $objRenglonPedido->precioUnitario=30;
    $objRenglonPedido->cant=2;

    echo "Codigo de articulo: ".$objRenglonPedido->codArt; echo "<br>";
    echo "Descripcion del articulo: ".$objRenglonPedido->desArt;echo "<br>";
    echo "Precio unitario: ".$objRenglonPedido->precioUnitario;echo "<br>";
    echo "Cantidad: ".$objRenglonPedido->cant;

    ?>
    <h2><?php
    echo "tipo de <font color= 'blue'>\$objRenglonPedido: </font> " . gettype($objRenglonPedido); 
    ?></h2>

    <h2>definamos arreglo de pedidos: <br><br>
    <?php
    echo "<font color= 'blue'>\$objRenglonesPedido</font> "; echo "<br>";echo "<br>";
    echo "Tabula <font color= 'blue'>\$objRenglonesPedido: </font>.Recorrer el arreglo de renglones y tabularlo con html: " ;
    ?>
    </h2>

    <?php

     $a = [
            [
                    'codArt' => 'cp002',
                    'desArt' => 'atun 800 gr',
                    'precioUnitario' => '24',
                    'cant' => '3',
            ],
            [       'codArt' => 'cp002',
                    'desArt' => 'atun 800 gr',
                    'precioUnitario' => '24',
                    'cant' => '3',
            ],
           
        ];



    echo '<table>';
    foreach ( $a as $r ) {
    echo '<tr>';
    foreach ( $r as $v ) {
    echo '<td>'.$v.'</td>';
    }
    echo '</tr>';
    }
    echo '</table>';

    ?>

<h3>
    <?php
    echo "Cantidad de renglones: " . count($a);echo "<br>";
    ?>
</h3>


    <?php
       echo "<h2>Produccion de un objeto <font color= 'blue'>\$objRenglonesPedido </font>con dos atributos array renglonesPedido y cantidadDeRenglones. </h2>"; echo "<br>";echo "<br>";

        echo "Cantidad de renglones: " . count($a);echo "<br>";

        echo "<h2>Produccion de un JSONRenglones:</h2>";

        $objRenglonesPedido= new stdClass();

        $objRenglonesPedido->renglonesPedido=$a;
        $objRenglonesPedido->cantidadDeRenglones=count($a);
       
        $jsonRenglonesPedido=json_encode($objRenglonesPedido);

        echo json_encode($objRenglonesPedido);

    ?>








</body>
</html>