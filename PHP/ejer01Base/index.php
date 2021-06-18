<!DOCTYPE html>
<html>

<head>
    <style>
         #table{
            border-collapse: collapse;
            border: 1px solid black;
            background: lightblue;
          
        }

        #table th {
            background: lightcoral;
            border-collapse: collapse ;
            border: 1px solid black;

        }
        #table td{
            border-collapse: collapse ;
            border: 1px solid black;
            
        }
    </style>
    <title>Base</title>
</head>

<body>

    <h2>Todo lo escrito fuera de las marcas de php es entregado en la respuesta http sin pasar por el procesador php</h2>

    <h3>
    <?php 
        echo "<hr/>";
    
        echo "Todo texto y/o html <font color = 'blue'>entregado por el procesador php</font> usando la sentencia echo.";
        echo "<hr/>";
        /*--------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        $mivariable = "valor1" ;
        echo "sin usar concatenador <font color = 'blue'>\$mivariable: </font>$mivariable "; 
        echo "<br>";echo "<br>";
    
        $var1 = "Usando concatenedor <font color = 'blue'>\$mivariable:</font> ";
        $texto_completo = $var1 . $mivariable;
        echo $texto_completo;
        echo "<hr/>";
        /*--------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        $mivariable= true;
        echo "variable tipo booleanas o logicas(verdadero)<font color = 'blue'>\$mivariable: </font>$mivariable ";
        echo "<br>";echo "<br>";
     
         $mivariable= false;
        echo "variable tipo booleanas o logicas(falso)<font color = 'blue'>\$mivariable: </font>$mivariable ";
        echo "<hr/>";
        /*--------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        define("MICONSTANTE","valorConstante");
        echo "<font color = 'blue'>MICONSTANTE: </font>",MICONSTANTE;
        echo "<br>"; echo "<br>";
   
        echo "Tipo de <font color = 'blue'>MICONSTANTE: </font>",gettype(MICONSTANTE);
        echo "<hr/>";
        /*--------------------------------------------------------------------------------------------------------------------------------------------------------------*/
        echo "Arreglos:";
        echo "<br>";echo "<br>";
    
        $aPalabra = array("Hola", "Hello");
        echo "<font color ='blue'>\$aPalabra: </font>$aPalabra[0]";
        echo "<br>";echo "<br>";
    
        echo "<font color ='blue'>\$aPalabra: </font>$aPalabra[1]";
        echo "<br>";echo "<br>";
    
        echo "Tipo de <font color = 'blue'>\$aPalabra: </font>",gettype($aPalabra);
        echo "<br>";echo "<br>";
    
        echo"Se agrego por programa dos elementos arrays";

        echo "<h2>Todos los elementos originales y agregados:</h2>";

        $array_nombres_indexado = array("hola", "hello");
 
        array_push($array_nombres_indexado, "Ciao","bounjourno");
 
        foreach($array_nombres_indexado as $saludo)
        {
        echo  "<li style='margin-left: 55px;color:green;font-size: 20px;'>$saludo</li> ";
        }
        echo "<br>";echo "<br>";

        
        
        /*--------------------------------------------------------------------------------------------------------------------------------------------------------------*/

    ?>
    </h3>
<h2>
<?php
    echo "Arreglo de dos dimensiones(diccionario)";

    $aDiccionarioBasico=[];
    echo "La variable \$aDiccionarioBasico tiene el siguiente tipo: ". gettype($aDiccionarioBasico);
    echo "<br>";echo "<br>";
  
    ?>
</h2>

<?php
  $arr = array("hola", "hello ","ciao","bounjourno");
  $arr1 = array("adios", "goodbye ","arrivederchi","au revoir");
  $arr2 = array("casa", "house ","casas","maison");

  echo "<table id='table'>";
  echo "<tr>";
  echo "  <th> Español  </th>";
  echo "  <th> Ingles </th>";
  echo "  <th> Italiano </th>";
  echo "  <th> Frances </th>";
  echo "</tr >";
  echo "<tr>  <td>" . $arr[0] . "</td> <td>" . $arr[1] ."</td> <td>" . $arr[2] ."</td> <td>" . $arr[3] ."</td> </tr>" ;
  echo "<tr>  <td>" . $arr1[0] . "</td> <td>" . $arr1[1] ."</td> <td>" . $arr1[2] ."</td> <td>" . $arr1[3] ."</td> </tr>" ;
  echo "<tr>  <td>" . $arr2[0] . "</td> <td>" . $arr2[1] ."</td> <td>" . $arr2[2] ."</td> <td>" . $arr2[3] ."</td> </tr>" ;
  echo "</table>";

  echo "<br>";echo "<br>";

  
?>

<h2><?php echo "Tambien se puede expresar el valor de \$aDiccionarioBasico[1][3]: $arr1[3]";echo "<br>";echo "<br>";?></h2>

   

    <?php
     echo "<h2>Variable tipo arreglo asociativo</h2>";



     $renglonDeLiquidacion=["articulo"=>"c0001","desArt"=> "motosierra" , "precioUni"=>2.000,"cant"=>"2"];

     echo "Codigo de articulo: ",$renglonDeLiquidacion['articulo'];echo "<br>";
     echo "Descripcion del articulo: ",$renglonDeLiquidacion['desArt'];echo "<br>";
     echo "Precio unitario: ",$renglonDeLiquidacion['precioUni'];echo "<br>";
     echo "Cantidad: ",$renglonDeLiquidacion['cant'];

     echo "<br>";echo "<br>";

     echo "Catidad de elementos: " . count($renglonDeLiquidacion);echo "<br>";
     echo "tipo de dato: " . gettype($renglonDeLiquidacion);
    
     echo "<hr/>";
    ?>

    <h4>
        <?php
         echo "Expresiones aritmeticas";echo "<br>"; echo "<br>";
         $x=3;
         echo "La variable \$x tiene el siguiente valor: $x";echo "<br>"; echo "<br>";
         $y=4;
         echo "La variable \$x tiene el siguiente valor: $y";echo "<br>"; echo "<br>";
         echo "La variable \$x tiene el siguiente tipo: ",gettype($x);echo "<br>"; echo "<br>";
         echo "La variable \$y tiene el siguiente tipo: ",gettype($y);echo "<br>"; echo "<br>";
         $z = $x + $y ;$m = $x * $y; $d = $x / $y;
         echo "Asi se imprime una expresion aritmetica por ejemplo de Suma: ( \$x + \$y ) = $z";echo "<br>";echo "<br>";
         echo "Asi se imprime una expresion aritmetica por ejemplo de Suma: ( \$x * \$y ) = $m";echo "<br>";echo "<br>";
         echo "Asi se imprime una expresion aritmetica por ejemplo de Suma: ( \$x / \$y ) = $d";echo "<br>";echo "<br>";
        ?>
    </h4>



</body>

</html>