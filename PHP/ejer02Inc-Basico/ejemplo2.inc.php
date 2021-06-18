<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #table{
        
            border: 1px solid black;
        }
        #table td,th{
            border: 1px solid black;
        }
    </style>
    
</head>
<body>
    <h2>
    <?php
    echo "La longitud de los arreglos es :0"; echo "<br>";echo "<br>";

    echo "Aqui ya se ejecuto la funcion include().Caundo se usa include ocurre que si el archivo 'inc' no existe,se visualiza un warnig y el script sigue ejecutandose <br> hasta el final. "; echo "<br>";echo "<br>";


    echo "Las 2 variables de tipo array asociativo en el inc son:";

    echo "<br>";echo "<br>";
    $arr = array("Gustavo", "Witt","1950");
    $arr1 = array("Lucio", "Paredes ","1896");

    echo '<table id="table">';
   
    echo "<tr>  <td>" . $arr[0] . "</td> <td>" . $arr[1] ."</td> <td>" . $arr[2] ."</td>"  ;
    echo "<tr>  <td>" . $arr1[0] . "</td> <td>" . $arr1[1] ."</td> <td>" . $arr1[2] ."</td>" ;
    echo "</table>";
?>
</h2>


   
</body>
</html>