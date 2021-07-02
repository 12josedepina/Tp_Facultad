<?php

include("conexion_db.php");

$query2 = "";

if(isset($_GET["campo"]) &&  isset($_GET["palabra"])){
    
    $palabra = $_GET["palabra"];
    $campo = $_GET["campo"];
    $query2= " where {$campo} LIKE '%{$palabra}%'";
}


$query = "SELECT p.*,t.nombre as tipo_documento_nombre,t.descripcion as tipo_documento_descripcion FROM personas p ";
$query.= " INNER JOIN tipo_documento t ON t.id = p.id_tipo_documento ";
$query.= $query2;


$personasObj = [];

if ($resultado = $mysqli->query($query)) {

    /* obtener un array asociativo */
    /*$fila contiene cada registro en cada iteracion*/
    
    while ($fila = $resultado->fetch_assoc()) {
    
        $persona  = new stdClass;
        $persona->numero_documento = $fila["numero_documento"];
        $persona->tipo_documento_nombre = $fila["tipo_documento_nombre"];
        $persona->tipo_documento_descripcion = $fila["tipo_documento_descripcion"];
        $persona->nombre = $fila["nombre"];
        $persona->apellido = $fila["apellido"];
        $persona->fecha_nacimiento = $fila["fecha_de_nac"];
        $persona->email = $fila["email"];
        //$persona->imagen_frente = base64_encode($fila["imagen_frente"]);
    
        array_push($personasObj,$persona);
            
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

echo json_encode($personasObj);

/* cerrar la conexión */
$mysqli->close();



?>