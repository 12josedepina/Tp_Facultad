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
    <title>Document</title>
    
</head>

<body>

    <?php
        echo "<H1> Accesos : {$_SESSION["cantidad_accesos"]}";
        echo "<H1> Accesos : {$_SESSION["password_enc"]}";
    ?>
    <!--escribir las etiquetas como html-->
    <?php
    
    
    echo "<p><button onClick=\"location.href='app_modulo1/index.php'\">Ingresea la aplicación</button><p>";
    echo "<p><button onClick=\"location.href='./destruir_sesion.php'\">Terminar sesión</button><p>";?>    
</body>

</html>
