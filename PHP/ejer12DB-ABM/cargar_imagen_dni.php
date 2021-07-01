
<?php

include("conexion_db.php");


if(!isset($_GET["numero_documento"])){
    fwrite($fp,"Parametro numero documento requerido");
    fclose($fp);
    die();
}

$numero_documento = $_GET["numero_documento"];

$query = "SELECT imagen_frente FROM personas where numero_documento = ".$numero_documento;

$imagen  = new stdClass;

if ($resultado = $mysqli->query($query)) {

    /* obtener un array asociativo */

    $fila = $resultado->fetch_assoc();
    
    $imagen->imagen_frente = base64_encode($fila["imagen_frente"]);

    /* liberar el conjunto de resultados */
    $resultado->free();
}

echo json_encode($imagen);

/* cerrar la conexión */
$mysqli->close();

