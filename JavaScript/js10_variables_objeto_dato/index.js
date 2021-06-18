//CREAR OBJETOS

var objetoPersona = {
    nombre: "Pablo",
    apellido: "Galdi",
    fechaNac: "01/07/1956"
};

var arregloPersonas = [objetoPersona];

arregloPersonas.push({
    nombre: "Jose",
    apellido: "Witt",
    fechaNac: "17/01/1985"
});

var objetoPersonas = {
    personas: arregloPersonas
};

// BOTON CREAR PERSONA
document.getElementById("creaPersona").onclick = function() {

    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var fechaNac = document.getElementById("fechaNac").value;

    var newPersona = {
        nombre: nombre,
        apellido: apellido,
        fechaNac: fechaNac
    };

    // Push para agregar  una nueva persona

    arregloPersonas.push(newPersona);

    console.log("Persona creada : ", newPersona);

    actualizarLista();
    clearInputs();
};

//LIMPIAR IMPUTS

function clearInputs() {

    document.getElementById("nombre").value = '';
    document.getElementById("apellido").value = '';
    document.getElementById("FechaNac").value = '';

}

//FUNCION AGREGAR PERSONAS A LA LISTA 

function actualizarLista() {
    var listPersonasTable = document.getElementById("ListaPersonas");


    objetoPersonas.personas.forEach(function(item, indice) {


        var indiceAux = indice + 1;

        var row = listPersonasTable.insertRow(indiceAux); //obtenemos la fila de la table, comenzando por 0

        var colName = row.insertCell(0); //obtengo la primera columna
        var colLastName = row.insertCell(1); //obtengo la segunda columna
        var colDayOfBirth = row.insertCell(2); //obtengo la tercera columna

        colName.innerHTML = item.nombre + "</br>"; //le asigno a la columna nombre la propiedad nombre del objeto persona
        colLastName.innerHTML = item.apellido + "</br>";
        colDayOfBirth.innerHTML = item.fechaNac + "</br>";



    });

    // longitud del array  

    var cantidadPersonas = document.getElementById("cantidadPersonas");


    cantidadPersonas.innerHTML = "Longitud del arreglo de objetos: " + objetoPersonas.personas.length;

}

// Boton para ver la tabla de lista personas

document.getElementById("lista").onclick = function() {
    var mostrar = document.getElementById('caja');
    var mostrarLista = document.getElementById('cantidadPersonas');
    mostrar.style.display = 'block';
    mostrarLista.style.display = 'block';



    actualizarLista();


};


document.getElementById("ocultar").onclick = function() {
    var cerrar = document.getElementById('caja');
    var close = document.getElementById('cantidadPersonas');
    cerrar.style.display = 'none';
    close.style.display = 'none';
}








//Presentacion
/* document.getElementById("lista").onclick = function() {
     var texto = "<h1>Presentacion</h1>";
     texto = texto + "<table style='border-collapse:collapse;border:solid'>";
     Texto = texto + " ............... ";
     texto = texto + "<H4>Longituddelarreglodeobjetos: " + objetoPersonas.personas.length;
     document.getElementById('presentacion').innerHTML = texto;
 };*/