<?php

include("conexion_db.php");





$query = " SELECT * FROM tipo_documento ";

$documentos  = [];

if ($resultado = $mysqli->query($query)) {

    /* obtener un array asociativo */
    /*$fila contiene cada registro en cada iteracion*/
    
    while($fila = $resultado->fetch_assoc()){


        $documento = new stdClass;

        $documento->nombre = $fila["nombre"];

        $documento->descripcion = $fila["descripcion"];

        array_push($documentos,$documento);
    }
    
    /* liberar el conjunto de resultados */
    $resultado->free();
}

echo json_encode($documentos);

/* cerrar la conexión */
$mysqli->close();



?>