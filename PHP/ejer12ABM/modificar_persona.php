<?php

include("conexion_db.php");


$fp = fopen('actualizar_personas.txt', 'w');

//$imagen_file = file_get_contents($_FILES["image_file"]["tmp_name"]);
$nombre = $_POST["nombre"];
$apellido   = $_POST["apellido"];
$numero_documento = $_POST["numero_documento"];
$tipo_documento = $_POST["tipo_documento"];
$email = $_POST["email"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];


$queryIdTipoDocumento = " SELECT id FROM tipo_documento where nombre = ".$tipo_documento;

$id_tipo_documento = 1;//seteado por default DNI

if ($resultado = $mysqli->query($queryIdTipoDocumento)) {
    
    $fila = $resultado->fetch_assoc();

    $id_tipo_documento = $fila["id"];

}

$query = " UPDATE personas set "; 
//$query.= " imagen_frente='".$imagen_file."' ";
$query.= " nombre='".$nombre."' ";
$query.= ",apellido='".$apellido."' ";
$query.= ",fecha_de_nac='".$fecha_nacimiento."' ";
$query.= ",email='".$email."' ";
$query.= ",id_tipo_documento=".$id_tipo_documento;
$query.= " where numero_documento = ".$numero_documento;


$persona  = new stdClass;

if (!$mysqli->query($query)) {

    echo "ERROR AL INTENTAR ACTUALIZAR LOS DATOS DE LA PERSONA".$mysqli->error;
    die();
}

echo "Se actualizo correctamente los datos";
echo "nombre : ".$nombre;
echo "documento : ".$numero_documento;

/* cerrar la conexión */
$mysqli->close();

fclose($fp);

?>