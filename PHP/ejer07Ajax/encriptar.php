<?php
  if (isset($_POST['clave'])){

    $claveHashMd5 = md5($_POST['clave']);

	$claveHasha1 = sha1($_POST['clave']);


  }
  sleep(3);

  ?>


<h2><?php
 echo "Clave: " . $_POST['clave'];
 echo "<br>";echo "<br>";
 echo "<h3>Clave encriptada en md5(128bits o 16 pares hexadecimales): </h3><br>" . $claveHashMd5;echo "<br>";echo "<br>";
 echo "<h3>Clave encriptada en sha1(160 bits o 20 pares heaxadecimales): </h3><br>" . $claveHasha1;echo "<br>";
  ?></h2>

