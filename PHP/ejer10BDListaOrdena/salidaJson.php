<?php

sleep(2);

define("USER","uweixrhkpumlwxik");
define("PASSWORD","mpZ3cUp30vUFrvGMcSfs");
define("HOST","bwmfm2ptyu7kv8krlfru-mysql.services.clever-cloud.com");
define("DB_NAME","bwmfm2ptyu7kv8krlfru");


$fp = fopen('logs_articulos.txt', 'w');


if(!isset($_GET["order"])){
    fwrite($fp,"No se paso el parametro requrido order");
    echo "[]";
    die();
}

$columnToOrder = $_GET["order"];


$mysqli = new mysqli(HOST,USER , PASSWORD, DB_NAME);


if ($mysqli->connect_errno) {
    
    fwrite($fp, "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);

}else{
    
    fwrite($fp,"Conexión a base de datos exitosa!!\n");

    
}


$query = "SELECT * FROM articulos order by ".$columnToOrder;

fwrite($fp,$query);

$articulosObj = [];

if ($resultado = $mysqli->query($query)) {

    /* obtener un array asociativo */
    /*$fila contiene cada registro en cada iteracion*/
    
    while ($fila = $resultado->fetch_assoc()) {
    
        $articulo  = new stdClass;
        $articulo->CodArt = $fila["codigo"];
        $articulo->Familia = $fila["familia"];
        $articulo->UM = $fila["unidad_medida"];
        $articulo->Descripcion = $fila["descripcion"];
        $articulo->FechaAlta = $fila["fecha_alta"];
        $articulo->SaldoStock = $fila["stock"];        
    
        array_push($articulosObj,$articulo);
            
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

echo json_encode($articulosObj);

/* cerrar la conexión */
$mysqli->close();

fclose($fp);
?>