<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VentanaModal</title>
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>
    <div class="conteiner">

        <div class="layouts"></div>

        <div class="boton-modal">
            <button id="mostrar" class="btn">VentanaModal</button>
        </div>


        <div id="contenedor-modal" class="modal" style="display: none;">


            <header>

                <span class="close-btn">
                    <button id="ocultar" class="close">X</button>
                </span>

            </header>

            <div class="formulario">

                <div class="form">
                    <div class="child">
                        <p>ID-usuario:</p>

                        <input type="text" id="usuario" required title="complete este campo">

                    </div>
                    <div class="child">
                        <p>Login:</p>

                        <input type="text" id="login" required title="complete este campo">

                    </div>
                    <div class="child">
                        <p>Apellido:</p>

                        <input type="text" id="apellido" required title="complete este campo">

                    </div>
                    <div class="child">
                        <p>Nombre:</p>

                        <input type="text" id="nombre" required title="complete este campo">

                    </div>
                    <div class="child">

                        <p>Fecha de Nacimiento:</p>

                        <input type="date" id="fechaNac" required title="complete este campo">

                    </div>
                    <div class="boton-enviar">
                        <button id="enviar" class="send" onclick="preguntar(event)">ENVIAR</button>
                    </div>
                    <div id="resultado"></div>

                </div>
            </div>


        </div>

        <footer class="layouts"></footer>

    </div>


    <script src="../jquery.js"></script>

    <script>
    function enviar() {
        alert('enviado');
    }

    function preguntar(event) {
        var opcion = confirm("¿Esta seguro de agregar registro?");
        if (!opcion) {
            event.preventDefault();
        }
    }
    </script>



    <script>
    $(document).ready(function() {

        $("#mostrar").on('click', function() {
            $("#contenedor-modal").show();
            return false;
        });
        $("#ocultar").on('click', function() {
            $("#contenedor-modal").hide();
            return false;
        });

        $("#enviar").on('click', function() {

            var usuario = $("#usuario").val();
            var login = $("#login").val();
            var apellido = $("#apellido").val();
            var nombre = $("#nombre").val();
            var fechaNac = $("#fechaNac").val();

            $("#resultado").empty();

            $("#resultado").html("<h2>Esperando respuesta.....</h2>");

            $.ajax({
                type: "post",
                url: "datos.php",
                data: {
                    usuario: usuario,
                    login: login,
                    apellido: apellido,
                    nombre: nombre,
                    fechaNac: fechaNac
                },
                success: function(respuesta, estado) {
                    $("#resultado").html(respuesta);
                }
            });

        });
    });
    </script>



    </script>




</body>

</html>