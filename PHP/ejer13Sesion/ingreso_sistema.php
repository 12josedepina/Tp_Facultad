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
    
</head>

<body>

    <?php

        echo "<H1> Acceso Permitido";echo"</br>";echo"</br>";
        echo "<H4> Variable Contador : {$_SESSION["cantidad_accesos"]}";echo"</br>";echo"</br>";
        echo "<H2> Sus parametros de sesion son las siguientes:";echo"</br>";echo"</br>";
       
        echo "<H1> Informacion de Sesion";echo"</br>";echo"</br>";
        echo "<H3> identificativo de sesion : {$_SESSION["password_enc"]}";echo"</br>";echo"</br>";
        echo "<H3> Login de usuario: {$_SESSION["usuario_loged"]}";echo"</br>";echo"</br>"; 
        echo "<H3>  Contador de sesion : {$_SESSION["cantidad_accesos"]}";echo"</br>";echo"</br>";
        

    ?>
   
    <?php
    
    
    echo "<p><button onClick=\"location.href='app_modulo1/index.php'\">Ingrese a la aplicación</button><p>";
    echo "<p><button onClick=\"location.href='./destruir_sesion.php'\">Terminar sesión</button><p>";
    
    ?>    
</body>

</html>

