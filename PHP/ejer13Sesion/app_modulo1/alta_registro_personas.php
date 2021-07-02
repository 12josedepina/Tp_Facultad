<?php


include("conexion_db.php");


$fp = fopen('alta_persona.txt', 'w');

$imagen_file = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
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


$query = " INSERT INTO personas(numero_documento,nombre,apellido,fecha_de_nac,email,id_tipo_documento,imagen_frente)  "; 
$query.= " VALUES ('{$numero_documento}','{$nombre}','$apellido','{$fecha_nacimiento}','{$email}','{$id_tipo_documento}','{$imagen_file}')";


$persona  = new stdClass;

if (!$mysqli->query($query)) {

    echo "ERROR AL INTENTAR DAR DE ALTA LA PERSONA".$mysqli->error;
    die();
}
echo "Datos recibidos para la Creación:"; echo "</br>";
echo "Se creo la persona correctamente";echo "</br>";
echo "Numero de documento : ".$numero_documento;echo "</br>";
echo "Tipo de documento : ".$id_tipo_documento;echo "</br>";
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