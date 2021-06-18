<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        #tabla{
            border-collapse: collapse;
            border: 1px solid black;
            background: lightgoldenrodyellow;
          
        }
        #tabla td,th{
            border-collapse: collapse ;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<div >
<?php
        echo "<h1>Variables de servidor</h1>";
        echo '<table id="tabla">';
        echo "<tr>";
        echo "<th> SERVER_ADDR </th>";
        echo "<td> " . $_SERVER['SERVER_ADDR'];"</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> SERVER_PORT </th>";
        echo "<td> " . $_SERVER['SERVER_PORT'];"</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> SERVER_NAME </th>";
        echo "<td> " . $_SERVER['SERVER_NAME'];"</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> DOCUMENT_ROOT </th>";
        echo "<td> " . $_SERVER['DOCUMENT_ROOT'];"</td>";
        echo "</tr>";
        echo "</table>";

    ?>    

</div>



<div>
    <?php
       
        echo '<table id="tabla">';
        echo "<tr>";
        echo "<th> REMOTE_ADDR </th>";
        echo "<td> " . $_SERVER['REMOTE_ADDR'];"</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> REMOTE_PORT </th>";
        echo "<td> " . $_SERVER['REMOTE_PORT'];"</td>";
        echo "</tr>";
        echo "<h1>Variables de cliente</h1>";
        
    ?>    
</div>

<div>
    <?php
      
    echo '<table id="tabla">';
    echo "<tr>";
    echo "<th> SCRIPT_NAME </th>";
    echo "<td> " . $_SERVER['SCRIPT_NAME'];"</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> REQUEST_METHOD </th>";
    echo "<td> " . $_SERVER['REQUEST_METHOD'];"</td>";
    echo "</tr>";
    echo "<h1>Variebles de Requerimiento</h1>";
    ?>

</div>



    
</body>
</html>



    