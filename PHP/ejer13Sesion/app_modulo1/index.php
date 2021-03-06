<!-- Validacion sesion si el usuario entro correctamente -->
<?php
include("../valida_sesion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB-ABM</title>
    <link rel="stylesheet" href="./estile.css">
</head>

<body>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- ENCABEZADO DEL LAYOUT -->
    
    <div class="contenedor">
        <div class="cabezera">
            <header><h1>Personas</h1></header> 
            <div class="botones">
                <!-- Input -->
                <div class="entrada"><p>Orden</p><input type="text" id="columnToOrder" class="im" value="Numero de Documento" readonly></div>
                <!-- Botones del layout -->
                <div><button id="cargar-articulos" class="btn">Cargar Datos</button></div>
                <div><button id="limpiar-articulos" class="btn">Vaciar Datos</button></div>
                <div><button id="crear-persona" class="btn">Alta Registro</button></div>
                <div><a href="../destruir_sesion.php"><input type="button" value="Cerrar Sesion" class="btn"></a></div>
            </div>
        </div>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- CREACION DE LA TABLA CON LOS ENCABEZADOS  -->
        <section>
            <table id="tabla-articulos">
                <thead>
                    <tr>
                        <th data-campo='id' id="colum-numero-documento"scope="col">Numero de Documento
                            <div class="filtro"><input id="filtro-numero-documento" type="text" ></div>
                        </th>
                        <th data-campo='tipodocumento' id="colum-tipo-documento" scope="col">Tipo de Documento
                            <div class="filtro"><input id="filtro-tipo-documento"  type="text" ></div>
                        </th>
                        <th data-campo='nom' id="colum-nombre" scope="col">Nombre
                            <div class="filtro"><input id="filtro-nombre"  type="text" ></div>
                        </th>
                        <th data-campo='ape' id="colum-apellido" scope="col">Apellidos
                            <div class="filtro"><input id="filtro-apellido"  type="text" ></div>
                        </th>
                        <th data-campo='fechaNac' id="colum-fecha-nacimiento" scope="col">Fecha de Nacimiento
                            <div class="filtro"><input id="filtro-fecha-nacimiento"  type="text" ></div>
                        </th>
                        <th data-campo='mail' scope="col" id="colum-email">Email</th>

                        <th data-campo='Pdf'>Imagen</th>
                        <th data-campo='modi'>MODIS</th>
                        <th data-campo='baja'>BAJAS</th>
                    </tr>
                </thead>
                <!-- CUERPO DE LA TABLA  CREADO CON JSCRIPT DATOS TRAIDO DE LA BASE DE DATOS-->
                <tbody id="tbody-articulos"></tbody>
                <!-- PIE DE LA TABLA -->
                <tfoot><tr><th campo-dato='Sck'>$Email</th></tr></tfoot>

            </table>
        </section>
        <!-- EL PIE DEL LAYOUT -->
        <footer><div id="totalRegistros"></div><h1>Pie</h1></footer>
    </div>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- VENTANA MODAL  DE ALTA REGISTRO -->
    <div id="modal-alta-persona" class="modal cerrar-modal" style="display: none;">
        <header class="titulo"><h1>Encabezado modal Formulario de alta</h1><!-- BOTON --><span class="close-btn"><button class="close" onclick="cerrarModal()">X</button></span></header>
        <div class="formulario">
            <form id="form-alta-persona" action="" class="form1" >

                <div class="contenedor1">
                    <div class="hijo"><p>Numero de Documento:</p><br>
                        <input type="text" id="alta-persona-numero-documento" name="numero_documento" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Nombre:</p><br>
                        <input type="text" id="alta-persona-nombre" name="nombre" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Apellido:</p><br>
                        <input type="text"  id="alta-persona-apellido" name="apellido" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                </div>
                
                <div class="contenedor2">
                    <div class="hijo"><p>Tipo de Documento:</p><br>
                        <select id="alta-persona-tipo-documento" name="tipo_documento" class="inputFields1"></select>
                        <br><br>
                    </div>
                    <div class="hijo"><p>Fecha de Nacimiento:</p><br>
                        <input type="date" id="alta-persona-fecha-nacimiento" name="fecha_nacimiento" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Email:</p><br>
                        <input type="email" id="alta-persona-email" name="email" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Archivo:</p><br>
                        <input type="file" id="alta-persona-image" name="imagen" required title="complete este campo">
                        <br><br>
                    </div>

                </div><div class="boton"><input type="submit" class="join-btn " id="button" VALUE="ENVIAR ALTA" /></div>
            </form>
        </div>
    </div>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- VENTANA MODAL DE MODIFICAR -->

    <div id="modal-modificar-persona" class="modal cerrar-modal" style="display: none;">
        <header class="titulo"><h1>Encabezado modal Formulario de modificacion</h1><!-- BOTON--><span class="close-btn"><button class="close" onclick="cerrarModal()">X</button></span></header>
        <div class="formulario">
            <form id="form-modificar-persona" action="" class="form1">

                <div class="contenedor1">
                    <div class="hijo"><p>Numero de Documento:</p><br>
                        <input type="text" id="input-modificar-numero-documento" name="numero_documento" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Nombre:</p><br>
                        <input type="text" id="input-modificar-nombre" name="nombre" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Apellido:</p><br>
                        <input type="text" id="input-modificar-apellido" name="apellido" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                </div>

                <div class="contenedor2">
                    <div class="hijo"><p>Tipo de Documento:</p><br>
                        <select id="select-modificar-tipo-documento" name="tipo_documento" class="inputFields1"></select>
                        <br><br>
                    </div>
                    <div class="hijo"><p>Fecha de Nacimiento:</p><br>
                        <input type="date" id="input-modificar-fecha-nacimiento" name="fecha_nacimiento" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Email:</p><br>
                        <input type="email" name="email" id="input-modificar-email" class="inputFields" required title="complete este campo">
                        <br><br>
                    </div>
                    <div class="hijo"><p>Archivo:</p><br>
                        <input type="file" name="imagen" required title="complete este campo">
                        <br><br>
                    </div>
                </div>
                
                <div class="boton"><input type="submit" class="join-btn " value="MODIFICAR" /></div>

            </form>
        </div>
    </div>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- MODAL RESPUESTA DE MODIFICAR PERSONA -->
    <div id="ventanaModalRespuestaModificar" class="cerrar-modal" style="display: none;">
        <header class="principal"><h1>Respuesta del servidor</h1><span class="boton-Cierra"><button id="cerrar"  onclick="cerrarModal()" class="cierra">X</button></span></header>
        <div id="respuesta-modificar-persona"></div>
    </div>
    <!-- MODAL DE RESPUESTA DE BORRADO DE UN DATO -->
    <div id="ventanaModalBorrar" class="cerrar-modal" style="display: none;">
        <header class="principal"><h1>Respuesta del servidor</h1><span class="boton-Cierra"><button id="cerrar"  onclick="cerrarModal()" class="cierra">X</button></span></header>
        <div id="respuesta-borrar"></div>
    </div>
    <!-- MODAL RESPUESTA DEL PDF E IMAGEN -->
    <div id="ventanaModalRespuesta" class="cerrar-modal" style="display: none;">
        <header class="respuesta"><h1>Respuesta del servidor</h1><span class="boton-cerrar"><button id="cerrar" class="cerrar" onclick="cerrarModal()">X</button></span></header>
        <div id="contenidoModalRespuesta"></div>
    </div>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- SCRIPTS DE LA APP -->

    
    <script src="../../jquery.js"></script>
    <script src="ordena.js"></script>

    <!-- ********************************************************************************************************************************************************** -->

    <!-- SCRIPTS DE MODAL Y TABLA-->

    <script>
        //FUNCION DE MOSTRAR EL MODAL ALTA PERSONA
        $(document).ready(function() {

            $("#crear-persona").on('click', function() {
                $("#modal-alta-persona").show();
                crearPersona();
                return false;
            });
        });
        //FUNCION CIERA EL MODAL ALTA REGISTRO
        function cerrarModal() {
            $(".cerrar-modal").hide();
        }

        //FUNCION BOTON CARGAR EL TBODY DE LA TABLA 
        $(document).ready(function() {
            $("#cargar-articulos").click(function() {
                cargaTabla('');
            });
            //FUNCION OCULTAR EL CONTENIDO DEL TBODY
            $("#limpiar-articulos").click(function() {
                clearTable();
            });
        });

        //************************************************************************************************************************//

        // AJAX DE OBTENCION DE DATOS DE LA MODIFICACION ASI MOSTRARLO EN UN SUB-MODAL 

        $("#form-modificar-persona").submit(function () {
            var formData = new FormData(this);
            $.ajax({
                url: 'modificar_persona.php',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta,estado) {
                    
                    $("#ventanaModalRespuestaModificar").show();
                    
                    $("#respuesta-modificar-persona").html(respuesta);
                    cargaTabla('');

                },
                error: function(){
                    alert("error in ajax form submission");
                }
            });
            return false;
        });

        //************************************************************************************************************************//

        // AJAX DE OBTENCION DE DATOS DE UN REGISTRO NUEVO DE PERSONA ASI MOSTRARLO EN UN SUB-MODAL 

        $("#form-alta-persona").submit(function () {
            var formData = new FormData(this);
            $.ajax({
                url: 'alta_registro_personas.php',
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta,estado) {

                    $("#ventanaModalRespuestaModificar").show();
                    
                    $("#respuesta-modificar-persona").html(respuesta);

                    cargaTabla('');
                },
                error: function(){
                    console.log("error in ajax form submission");

                    
                }
            });
            return false;
        });

        //************************************************************************************************************************//

        //FUNCION QUE HAGA QUE NO REPITA LOS MISMOS REGISTRO AL PRESIONAR EL BOTON NUEVAMENTE 

        function clearTable() {
            $("#tbody-articulos").empty();
        }

        // FUNCION  PARA CARGAR IMAGEN O PDF 
        function cargarImagenDni(numeroDocumento) {

            $.ajax({
                type: "get",
                data: {
                    numero_documento: numeroDocumento
                },
                url: "cargar_imagen_dni.php",
                success: function(respuestaDelServer, estado) {

                    objetoDato = JSON.parse(respuestaDelServer);
                    var imagen_frente_data = objetoDato.imagen_frente;
                    $("#ventanaModalRespuesta").css("visibility", "visible");
                    $("#ventanaModalRespuesta").css("display", "block");
                    $("#contenidoModalRespuesta").empty();
                    $("#contenidoModalRespuesta").html("<iframe width='100%' height='600px'src='data:image/jpeg;base64," + imagen_frente_data + "'></iframe>");
                }
            });
        }

        //************************************************************************************************************************//

        //FUNCION BORRAR DATOS DE UNA FILA DE PERSONAS

        function borrarPersona(numeroDocumento) {

            $.ajax({
                type: "post",
                url: "borrar_persona.php",
                data: {
                    numero_documento: numeroDocumento
                },
                success: function(respuestaServer, estado) {

                    $("#respuesta-borrar").html(respuestaServer);
                    $("#ventanaModalBorrar").css("visibility", "visible");
                    $("#ventanaModalBorrar").css("display", "block");
                    cargaTabla('');
                }
            });

        }

        //************************************************************************************************************************//

        //FUNCION PARA LA SELECCION DEL SELECT  AL CREAR UN NUEVO REGISTRO
        function setSelectedValue(selectObj, valueToSet) {
            for (var i = 0; i < selectObj.options.length; i++) {
                if (selectObj.options[i].text == valueToSet) {
                    selectObj.options[i].selected = true;
                    return;
                }
            }
        }
        //FUNCION PARA OBTENER  DATOS DE TABLA PARA EL DESPLEGABLE 
        function traerDocumentos(select ,documentoSeleccionado){
            $.ajax({

                type: "get",
                url: "obtener_documentos.php",
                success: function(respuestaDocumentosServer, estadoDocumentos) {

                    respuestaDocumentos = JSON.parse(respuestaDocumentosServer);

                    var length = select.options.length;

                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }

                    respuestaDocumentos.forEach(function(tipo_documento, index) {

                        var optionElement = document.createElement("option");

                        optionElement.setAttribute("value", tipo_documento.nombre);

                        optionElement.innerHTML = tipo_documento.descripcion;

                        select.appendChild(optionElement);

                    });
                    if(documentoSeleccionado !== ''){

                        setSelectedValue(select, respuesta.tipo_documento_descripcion);
                    }
                }

            });
        }
       
        function crearPersona(){
            traerDocumentos(document.getElementById("alta-persona-tipo-documento"),'');
        }

        //************************************************************************************************************************//

        //TRAER DATOS DE PERSONA PARA RELLENAR EN LOS INPUTS DEL FORMULARIO CORRESPONDIENTE
        function modificarPersona(numeroDocumento) {

            $.ajax({
                type: "get",
                url: "obtener_datos_persona.php",
                data: {
                    numero_documento: numeroDocumento
                },
                success: function(respuestaServer, estado) {

                    respuesta = JSON.parse(respuestaServer);

                    traerDocumentos(document.getElementById("select-modificar-tipo-documento"),respuesta.tipo_documento_descripcion);

                    $("#input-modificar-nombre").val(respuesta.nombre);
                    $("#input-modificar-apellido").val(respuesta.apellido);
                    $("#input-modificar-numero-documento").val(respuesta.numero_documento);
                    $("#input-modificar-email").val(respuesta.email);
                    $("#input-modificar-fecha-nacimiento").val(respuesta.fecha_nacimiento);

                    $("#modal-modificar-persona").css("visibility", "visible");
                    $("#modal-modificar-persona").css("display", "block");

                }
            });

        }

        //************************************************************************************************************************//

        //FUNCION FILTRO DE LOS CAMPOS DEL TBODY
        function obtenerFiltro(){

            var numero_documento = $("#filtro-numero-documento").val();
            var tipo_documento = $("#filtro-tipo-documento").val();
            var nombre = $("#filtro-nombre").val();
            var apellido = $("#filtro-apellido").val();
            var fecha_nacimiento = $("#filtro-fecha-nacimiento").val();

            var campoAfiltrar;
            var valorAFiltrar;

            if(numero_documento != ''){
                campoAfiltrar = 'numero_documento';
                valorAFiltrar = numero_documento;
            }
            if(tipo_documento != ''){
                campoAfiltrar = 't.nombre';
                valorAFiltrar = tipo_documento;
            }
            if(nombre != ''){
                campoAfiltrar = 'p.nombre';
                valorAFiltrar = nombre;
            }
            if(apellido != ''){
                campoAfiltrar = 'apellido';
                valorAFiltrar = apellido;
            }
            if(fecha_nacimiento != ''){
                campoAfiltrar = 'fecha_de_nac';
                valorAFiltrar = fecha_nacimiento;
            }
            
            if(typeof campoAfiltrar === 'undefined' || typeof  valorAFiltrar === 'undefined'){
                return {};
            }

            return {campo : campoAfiltrar , palabra : valorAFiltrar};

        }

        //************************************************************************************************************************//

        
        // FUNCION CREAR  EL TBODY Y MOSTRARLO EN EL HTML (DATOS TRAIDOS DEL SERVIDOR)
        function cargaTabla(campo) {

            var jsonFiltro = obtenerFiltro();

            $("#tbody-articulos").empty();
            $("#tbody-articulos").html("<p>Esperando respuesta.......</p>");

            varobjAjax = $.ajax({
                type: "get",
                data : jsonFiltro,
                url: "salidaJson.php?order="+campo,
            
                success: function(respuestaDelServer, estado) {
                    $("#tbody-articulos").empty();
                    objJson = JSON.parse(respuestaDelServer);

                    objJson.forEach(function(argValor, argIndice) {

                        var tableRow = document.createElement("tr");

                        var numeroDocTd = document.createElement("td");

                        numeroDocTd.innerHTML = argValor.numero_documento;

                        var tipoDocumentoTd = document.createElement("td");

                        tipoDocumentoTd.innerHTML = argValor.tipo_documento_nombre;

                        var nombreTd = document.createElement("td");

                        nombreTd.innerHTML = argValor.nombre;

                        var apellidosTd = document.createElement("td");

                        apellidosTd.innerHTML = argValor.apellido;

                        var fechaNacTd = document.createElement("td");

                        fechaNacTd.innerHTML = argValor.fecha_nacimiento;

                        var emailTd = document.createElement("td");

                        emailTd.innerHTML = argValor.email;

                        var pdfTd = document.createElement("td");

                        pdfTd.innerHTML = "<button class='btCelda' onclick='cargarImagenDni(" + argValor.numero_documento + ")'>Arch.Imagen</button>";

                        var modiTd = document.createElement("td");

                        modiTd.innerHTML = "<button onclick='modificarPersona(" + argValor.numero_documento + ")' class='btCelda'>Modi</button>";

                        var borrarTd = document.createElement("td");

                        borrarTd.innerHTML = "<button class='btCelda' onclick='borrarPersona(" + argValor.numero_documento + ")'>Borrar</button>";

                        tableRow.appendChild(numeroDocTd);
                        tableRow.appendChild(tipoDocumentoTd);
                        tableRow.appendChild(nombreTd);
                        tableRow.appendChild(apellidosTd);
                        tableRow.appendChild(fechaNacTd);
                        tableRow.appendChild(emailTd);
                        tableRow.append(pdfTd);
                        tableRow.append(modiTd);
                        tableRow.append(borrarTd);

                        document.getElementById("tbody-articulos").appendChild(tableRow);
                    });

                    $("#totalRegistros").html("Nro de registros: " + objJson.length);
                }
            });

            function clearTable() {
            $("#tbody-articulos").empty();
        }

        }

    </script>

</body>
</html>