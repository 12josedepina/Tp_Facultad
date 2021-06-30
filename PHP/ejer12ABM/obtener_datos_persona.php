<?php

include("conexion_db.php");


$fp = fopen('obtener_persona.txt', 'w');

if(!isset($_GET["numero_documento"])){
    fwrite($fp,"Parametro numero documento requerido");
    fclose($fp);
    die();
}

$numero_documento = $_GET["numero_documento"];

$query = "SELECT p.*,t.nombre as tipo_documento_nombre,t.descripcion as tipo_documento_descripcion FROM personas p ";
$query.= " INNER JOIN tipo_documento t ON t.id = p.id_tipo_documento where numero_documento = ".$numero_documento ;

$persona  = new stdClass;

if ($resultado = $mysqli->query($query)) {

    /* obtener un array asociativo */
    /*$fila contiene cada registro en cada iteracion*/
    
    $fila = $resultado->fetch_assoc();
    
    $persona->numero_documento = $fila["numero_documento"];
    $persona->tipo_documento_nombre = $fila["tipo_documento_nombre"];
    $persona->tipo_documento_descripcion = $fila["tipo_documento_descripcion"];
    $persona->nombre = $fila["nombre"];
    $persona->apellido = $fila["apellido"];
    $persona->fecha_nacimiento = $fila["fecha_de_nac"];
    $persona->email = $fila["email"];
    //$persona->imagen_frente = base64_encode($fila["imagen_frente"]);
    
    
    /* liberar el conjunto de resultados */
    $resultado->free();
}

echo json_encode($persona);

/* cerrar la conexión */
$mysqli->close();

fclose($fp);

?>