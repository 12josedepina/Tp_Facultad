//MUESTRA VALOR

document.getElementById("muestraValor").onclick = function() {
    alert(document.getElementById("x").value);
}

// SUMA

document.getElementById("suma").onclick = function() {

    var numero = document.getElementById("x").value;
    var num = 1;
    var total = parseInt(numero) + parseInt(num);

    document.getElementById("x").value = total;

}


// ELEVADO A LA 2 POTENCIA

document.getElementById("potencia").onclick = function() {

    var numero = document.getElementById("x").value;
    var num = 2;
    var total = parseInt(numero) ** parseInt(num);

    document.getElementById("x").value = total;

}



//MULTIPLICACION X 2

document.getElementById("multiplicacion").onclick = function() {

    var numero = document.getElementById("x").value;
    var num = 2;
    var total = parseInt(numero) * parseInt(num);

    document.getElementById("x").value = total;

}

// NUMEROS BINARIOS  ELEVAR A LA X

document.getElementById("binario").onclick = function() {

    var numero = document.getElementById("x").value;
    var num = 2;
    var total = parseInt(num) ** parseInt(numero);

    document.getElementById("x").value = total;

}