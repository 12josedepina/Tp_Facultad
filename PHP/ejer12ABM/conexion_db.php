<?php 

define("USER","uweixrhkpumlwxik");
define("PASSWORD","mpZ3cUp30vUFrvGMcSfs");
define("HOST","bwmfm2ptyu7kv8krlfru-mysql.services.clever-cloud.com");
define("DB_NAME","bwmfm2ptyu7kv8krlfru");

$log_file_conexion = fopen('log_conexion.txt', 'w');

$mysqli = new mysqli(HOST,USER , PASSWORD, DB_NAME);


if ($mysqli->connect_errno) {
    
    fwrite($log_file_conexion, "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);

}else{
    
    fwrite($log_file_conexion,"Conexión a base de datos exitosa!!");

}

fclose($log_file_conexion);

?>