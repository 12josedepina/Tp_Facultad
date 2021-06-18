<?php
sleep(3);
  
if (isset($_POST["usuario"]) && isset($_POST["login"]) && isset($_POST["apellido"]) && isset($_POST["nombre"]) && isset($_POST["fechaNac"]) ){

  $datos= new stdClass;
  $datos->idUsuario = $_POST["usuario"];
  $datos->loginUsuario = $_POST["login"];
  $datos->apellido 	= $_POST["apellido"];
  $datos->nombre 		= $_POST["nombre"];
  $datos->fechaNac	= $_POST["fechaNac"];
  
   
	echo "<h3>Resultado de la transformacion de Json en el Servidor: <br></h3>".json_encode($datos);
  
}else{

  echo json_encode(new stdClass);

}


?>