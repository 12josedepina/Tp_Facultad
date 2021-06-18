<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<br/> &nbsp; DATOS RECIBIDOS";

    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];

    echo "<br/> &nbsp; Nombre= ". $nombres;

    echo "<br/> &nbsp; Apellido= ". $apellidos;

    ?>
<br>
<br>
<a href="../index.html"><button type="button">CERRAR</button></a>
</body>
</html>