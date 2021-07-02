<?php

include("conexion_db.php");

if(!isset($_POST["username"]) || !isset($_POST["password"])){
    header("Location: index.html");    
}

$username = $_POST["username"];
$password = $_POST["password"];


$opciones = [
    'cost' => 12,
];

$password_encrypted =  password_hash($password, PASSWORD_BCRYPT, $opciones);

/*
$bcrypt = bcrypt($password_encrypted);
$query = "INSERT INTO login (usuario,password,cantidad_accesos) VALUES ( '{$username}','{$bcrypt}',1) ";
echo $query;
$mysqli->query($query);
die();
*/
$query = " SELECT * FROM login where usuario= '{$username}' ";


if($resultado = $mysqli->query($query)){


    if($resultado->num_rows > 0 ){

        $fila = $resultado->fetch_assoc();

        $passwordFromDb = $fila["password"];

        if(!password_verify($password,$passwordFromDb)){
            header("Location: index.html");
            exit();
        }

        $contador = $fila["cantidad_accesos"] + 1;

        $id = $fila["id"];
        
        session_start();

        $_SESSION["session_id"] = session_id();

        $_SESSION["usuario_loged"] = $username;

        $_SESSION["password_enc"] = $password_encrypted;

        $queryContadorUpdate = " UPDATE login set cantidad_accesos = {$contador} where id = {$id}";

        $_SESSION["cantidad_accesos"] = $contador;

        if(!$mysqli->query($queryContadorUpdate)){
            echo "no se pudo actualizar el contador";
        }

        header("Location: ingreso_sistema.php");
        
        exit();
    } 
}

header("Location: index.html");


?>