function insertaFila() {
    //bucle para insertar filas

    var tabla = document.getElementById('tabla-extend');


    // let fila = document.getElementById('tabla').insertRow(i);
    let table = document.getElementById('tabla-extend').tBodies[1];
    let row = table.rows[0].cloneNode(true);
    table.appendChild(row);
    let conta = document.getElementById('tabla-extend').rows.length;
    var filas = tabla.getElementsByTagName('tr')[conta - 1];
    var celdas = filas.getElementsByTagName('td')[0].firstChild;
    celdas.value = conta - 1;
}

function eliminaFila() {
    let table = document.getElementById("tabla-extend");
    let rowCount = table.rows.length;
    if (rowCount > 2) {
        table.deleteRow(rowCount - 1);
    }
}