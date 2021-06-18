<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>

    <div class="contenedor">


        <div class="entrada">
            <div>
            <span>Dato de entrada:</span><br>
            <input type="text" name="clave" id="clave">
            </div>
            

        </div>


        <div class="send">
            <div>
            <span>Encriptar</span><br>
            <div class="left-footer">
                <button id="enviar" class="btn">Next</button>
            </div>
            </div>
           
        </div>


        <div id="resultado">
            <span>Resultado:</span>
        </div>

        <div id="estado">
            <span>Estado del Requerimiento</span>
        </div>
        <div class="vacio"></div>

    </div>

    <script src="../jquery.js"></script>
    

    <script>
    $(document).ready(function() {

        $("#enviar").click(function() {

            $("#resultado").empty();

            $("#resultado").html("<h2>Esperando respuesta.....</h2>");

           


            $.ajax({

                type: "post",
                url: 'encriptar.php',
                data: {
                    clave: $("#clave").val()
                },
                success: function(respuesta, estado) {

                    
                   
                    $("#resultado").html("<h2>Resultado: </h2><h4>" + respuesta + "</h4>");
                    $("#estado").append("<h3 style='color:yellowgreen'>" + estado + "</h3>")

                }


            });

        });

    });
    </script>

</body>

</html>