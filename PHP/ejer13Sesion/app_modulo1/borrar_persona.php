<?php


include("conexion_db.php");


if(!isset($_POST["numero_documento"])){
    die("Falta el numero de documento para eliminar");
}

$numero_documento = $_POST["numero_documento"];


$query = " DELETE FROM personas where numero_documento =  ".$numero_documento; 


if (!$mysqli->query($query)) {

    echo "ERROR AL INTENTAR ELIMINAR LA PERSONA".$mysqli->error;
    die();
}

echo "Se elimino la persona con el numero de documento : ".$numero_documento;echo "</br>";echo "</br>";
echo "Baja realizado correctamente !";
/* cerrar la conexión */

$mysqli->close();


?>