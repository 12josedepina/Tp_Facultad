<?php

include("conexion_db.php");


$fp = fopen('actualizar_personas.txt', 'w');

$imagen_file = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$nombre = $_POST["nombre"];
$apellido   = $_POST["apellido"];
$numero_documento = $_POST["numero_documento"];
$tipo_documento = $_POST["tipo_documento"];
$email = $_POST["email"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];


$queryIdTipoDocumento = " SELECT id,descripcion FROM tipo_documento where nombre = '{$tipo_documento}'";

$id_tipo_documento;
$dni_descripcion;

if ($resultado = $mysqli->query($queryIdTipoDocumento)) {
    
    $fila = $resultado->fetch_assoc();

    $id_tipo_documento = $fila["id"];
    $dni_descripcion = $fila["descripcion"];


}

$query = " UPDATE personas set "; 
$query.= " imagen_frente='{$imagen_file}'";
$query.= " ,nombre='".$nombre."' ";
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
echo "Datos recibidos para la modificacion:"; echo "</br>";
echo "Se actualizo correctamente los datos";echo "</br>";
echo "Numero de documento : ".$numero_documento;echo "</br>";
echo "Tipo de documento : ".$dni_descripcion;echo "</br>";
echo "Nombre : ".$nombre;echo "</br>";
echo "Apellido : ".$apellido;echo "</br>";
echo "Fecha de Nacimiento : ".$fecha_nacimiento;echo "</br>";
echo "Email : ".$email;echo "</br>";
echo "Datos simples actualizados correctamente!"; echo "</br>";
echo "Trae archivo-Imagen asociado a numero de documento: ".$numero_documento; echo "</br>";


/* cerrar la conexión */
$mysqli->close();

fclose($fp);

?>