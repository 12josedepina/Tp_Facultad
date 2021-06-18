<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>En este ejemplo se utiliza la funcion include() que ubica codigo php definido en el archivo ejemplo2.inc :</h2>

    <h2>Antes de insertar el include las variables declaradas en el mismo no existen <br>
        Las variable son:
    </h2>

    <div>
        <?php
        
        include("inc");
        ?>
    </div>
    <div>
    <?php
        
        include("ejemplo2.inc.php");
        ?>
    </div>

</body>

</html>