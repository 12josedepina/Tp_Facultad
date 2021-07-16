<?php

session_start();

if (!isset($_SESSION["session_id"])) {
    header('Location: ../index.html');
    exit();
}

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Ingreso a Sistema</title>
    <style>
body {
  background-color: dodgerblue;
}

.container {
  background-color: darkslategrey;
  color: #cccccc;
  font-family: "Nunito", sans-serif;
  width: 50%;
  border-radius: 7px;
  padding: 1%;
  margin:  auto;
  overflow: hidden;
  position: absolute;
    top: 10%;
    left: 25%;
}

button {
    outline: none;
    border: none;
    background: #2baa3b;
    color: #ffffff;
    width: 100%;
    height: 50px;
    border-radius: 5px;
    font-family: "Nunito", sans-serif;
    cursor: pointer;
    font-size: 18px;
}
.flex_content flex2 {
  overflow: hidden;
}

.flex_content{
  overflow: hidden;
}

@media screen and (max-width: 400px) {
  .container {
    padding: 16%;
    top: 19%;
    left: 8%;
}
.flex_content {
    overflow: hidden;
    
}

h1,h2,h4{
  font-size: 48px;
}

  
}

</style>
    
</head>

<body>

<div class="container flex">
    <div class="flex_content flex2">
        <?php

        echo "<H1> Acceso Permitido";echo"</br>";
        echo "<H4> Variable Contador : {$_SESSION["cantidad_accesos"]}";echo"</br>";
        echo "<p><button onClick=\"location.href='./destruir_sesion.php'\">Terminar sesión</button><p>";echo"</br>";
        echo "<H2> Sus parametros de sesion son las siguientes:";echo"</br>";
        
        ?>
    </div>
    <div class="flex_content">     
        <?php
        echo "<H1> Informacion de Sesion";echo"</br>";
        echo "<H3> identificativo de sesion : {$_SESSION["password_enc"]}";echo"</br>";
        echo "<H3> Login de usuario: {$_SESSION["usuario_loged"]}";echo"</br>"; 
        echo "<H3>  Contador de sesion : {$_SESSION["cantidad_accesos"]}";echo"</br>";
        echo "<p><button onClick=\"location.href='app_modulo1/index.php'\">Ingrese a la aplicación</button><p>";
    
    ?>
    </div>
</div>   
</body>

</html>

