

$(document).ready(function() {
    $("#colum-numero-documento").click(function() {
        console.log("enviando documento");
        cargaTabla("numero_documento");
        cargarInput($(this).html());
    });
    $("#colum-tipo-documento").click(function() {
        cargaTabla("documento");
        cargarInput($(this).html());
    });
    $("#colum-nombre").click(function() {
        cargaTabla("nombre");
        cargarInput($(this).html());
    });
    $("#colum-apellido").click(function() {
        cargaTabla("apellido");
        cargarInput($(this).html());
    });
    $("#colum-fecha-nacimiento").click(function() {
        cargaTabla("fecha_de_nac");
        cargarInput($(this).html());
    });
    $("#colum-email").click(function() {
        cargaTabla("email");
        cargarInput($(this).html());
    });

});

function cargarInput(campoTabla) {
    $("#columnToOrder").val(campoTabla);
}