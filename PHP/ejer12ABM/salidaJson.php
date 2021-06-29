<?php

sleep(2);

define("USER","uweixrhkpumlwxik");
define("PASSWORD","mpZ3cUp30vUFrvGMcSfs");
define("HOST","bwmfm2ptyu7kv8krlfru-mysql.services.clever-cloud.com");
define("DB_NAME","bwmfm2ptyu7kv8krlfru");

$fp = fopen('logs_articulos.txt', 'w');

$mysqli = new mysqli(HOST,USER , PASSWORD, DB_NAME);


if ($mysqli->connect_errno) {
    
    fwrite($fp, "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);

}else{
    
    fwrite($fp,"Conexión a base de datos exitosa!!");

    
}


$query = "SELECT * FROM personas";

$personasObj = [];

if ($resultado = $mysqli->query($query)) {

    /* obtener un array asociativo */
    /*$fila contiene cada registro en cada iteracion*/
    
    while ($fila = $resultado->fetch_assoc()) {
    
        $persona  = new stdClass;
        $persona->Id = $fila["codigo"];
        $persona->Nombre = $fila["nombre"];
        $persona->Apellidos = $fila["apellido"];
        $persona->Cuidad = $fila["cuidad"];
        $persona->FechadeNacimiento = $fila["fecha_de_nac"];
        $persona->Email= $fila["email"];        
    
        array_push($personasObj,$persona);
            
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

echo json_encode($personasObj);

/* cerrar la conexión */
$mysqli->close();

fclose($fp);
?>
