$(document).ready(function() {
    $("#colum-numero-documento").click(function() {
        cargaTabla("colum-numero-documento");
        cargarInput($(this).html());
    });
    $("#colum-tipo-documento").click(function() {
        cargaTabla("colum-tipo-documento");
        cargarInput($(this).html());
    });
    $("#colum-nombre").click(function() {
        cargaTabla("colum-nombre");
        cargarInput($(this).html());
    });
    $("#colum-apellido").click(function() {
        cargaTabla("colum-apellido");
        cargarInput($(this).html());
    });
    $("#colum-fecha-nacimiento").click(function() {
        cargaTabla("colum-fecha-nacimiento");
        cargarInput($(this).html());
    });
    $("#colum-email").click(function() {
        cargaTabla("colum-email");
        cargarInput($(this).html());
    });

});

function cargarInput(campoTabla) {
    $("#columnToOrder").val(campoTabla);
}