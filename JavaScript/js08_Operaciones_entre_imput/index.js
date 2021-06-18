//SUMA

document.getElementById("suma").onclick = function() {

    var var1 = document.getElementById('txt_campo_1').value;
    var var2 = document.getElementById('txt_campo_2').value;
    var var3 = document.getElementById('txt_campo_3').value;

    var total = parseInt(var1) + parseInt(var2) + parseInt(var3);

    document.getElementById("total").value = total;

}


// PROMEDIO


document.getElementById("promedio").onclick = function() {
    var var1 = document.getElementById('txt_campo_1').value;
    var var2 = document.getElementById('txt_campo_2').value;
    var var3 = document.getElementById('txt_campo_3').value;

    var prom = (parseFloat(var1) + parseFloat(var2) + parseFloat(var3)) / 3;

    document.getElementById("total").value = prom;

}

// MAYOR


document.getElementById("mayor").onclick = function() {



    var num1 = document.getElementById('txt_campo_1').value;

    var num2 = document.getElementById('txt_campo_2').value;

    var num3 = document.getElementById('txt_campo_3').value;



    if (num1 > num2 && num1 > num3)

    {

        document.getElementById("total").value = num1;

    }

    if (num2 > num1 && num2 > num3) {

        document.getElementById("total").value = num2;


    }
    if (num3 > num1 && num3 > num2) {

        document.getElementById("total").value = num3;


    }

}