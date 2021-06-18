<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encript</title>
    <link rel="stylesheet" href="./estilos.css">

</head>
<body>

  
<?php
  if (isset($_POST['clave'])){

    $claveHashMd5 = md5($_POST['clave']);

	$claveHasha1 = sha1($_POST['clave']);

    echo "Clave: " . $_POST['clave'];
    echo "<br>";

	echo "Clave encriptada en md5(128bits o 16 pares hexadecimales): <br>" . $claveHashMd5;
    echo "<br>";
    echo "Clave: " . $_POST['clave'];
    echo "<br>";
    echo "Clave encriptada en sha1(160 bits o 20 pares heaxadecimales): <br>" . $claveHasha1;

  }else{
    echo "<form action='index.php' method='post' class='formulario'>";
    echo "<label>Ingrese clave a encriptar: </label>";
    echo "<input type='text' name='clave'><br><br>";
    echo "<input type='submit' value='obtener encriptacion' class='boton'>";
    echo "</form>";
 }?>
  

</body>
</html>