
window.onload = function () {
    // const inf_Consolidado = document.getElementById('Consolidado');
    // const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');
    const inf_tablaTerminaciones = document.getElementById('tablaterminacion');
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_FrutaExportada = document.getElementById('FrutaExportada');

    inf_Terminacion.style.display = 'none';
    inf_tablaTerminaciones.style.display = 'flex';
    // inf_Consolidado.style.display = 'none';
    // inf_Lluvia.style.display = 'none';
    inf_RacimosCortados.style.display = 'none';
    inf_FrutaExportada.style.display = 'none';
}

function show(param_div_id) {
    // const inf_Consolidado = document.getElementById('Consolidado');
    // const inf_Lluvia = document.getElementById('Lluvia');
    const inf_Terminacion = document.getElementById('Terminacion');
    const inf_tablaTerminaciones = document.getElementById('tablaterminacion');
    // if (param_div_id == 'Consolidado') {
    // inf_Consolidado.style.display = 'flex';
    // inf_Lluvia.style.display = 'none';
    // inf_Terminacion.style.display = 'none';
    // inf_tablaTerminaciones.style.display = 'none';
    // }
    // else if (param_div_id == 'Lluvia') {
    //     // inf_Consolidado.style.display = 'none';
    //     // inf_Lluvia.style.display = 'flex';
    //     inf_Terminacion.style.display = 'none';
    //     inf_tablaTerminaciones.style.display = 'none';
    // }
    if (param_div_id == 'Terminacion') {
        // inf_Consolidado.style.display = 'none';
        // inf_Lluvia.style.display = 'none';
        inf_Terminacion.style.display = 'flex';
        inf_tablaTerminaciones.style.display = 'none';
    }
    else if (param_div_id == 'tablaterminacion') {
        // inf_Consolidado.style.display = 'none';
        // inf_Lluvia.style.display = 'none';
        inf_Terminacion.style.display = 'none';
        inf_tablaTerminaciones.style.display = 'flex';
    }



}

function emergentes(param_div_id) {
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_RacimosRepicados = document.getElementById('RacimosRepicados');
    const inf_FrutaExportada = document.getElementById('FrutaExportada');
    if (param_div_id == 'RacimosCortados') {
        inf_RacimosCortados.style.position = 'absolute';
        inf_RacimosCortados.style.display = 'block';
    }
    else if (param_div_id == 'RacimosRepicados') {
        inf_RacimosRepicados.style.position = 'absolute';
        inf_RacimosRepicados.style.display = 'block';
    }
    else if (param_div_id == 'FrutaExportada') {
        inf_FrutaExportada.style.position = 'absolute';
        inf_FrutaExportada.style.display = 'block';
    }
}

function sinemergentes(param_div_id) {
    const inf_RacimosCortados = document.getElementById('RacimosCortados');
    const inf_RacimosRepicados = document.getElementById('RacimosRepicados');
    const inf_FrutaExportada = document.getElementById('FrutaExportada');
    if (param_div_id == 'RacimosCortados') {
        inf_RacimosCortados.style.position = 'none';
        inf_RacimosCortados.style.display = 'none';
    }
    else if (param_div_id == 'RacimosRepicados') {
        inf_RacimosRepicados.style.position = 'none';
        inf_RacimosRepicados.style.display = 'none';

    }
    else if (param_div_id == 'FrutaExportada') {
        inf_FrutaExportada.style.position = 'none';
        inf_FrutaExportada.style.display = 'none';
    }
}



function insertaFila(tblId) {
    //bucle para insertar filas

    var tabla = document.getElementById('tabla');


    // let fila = document.getElementById('tabla').insertRow(i);
    let table = document.getElementById(tblId).tBodies[0];
    let row = table.rows[0].cloneNode(true);
    table.appendChild(row);
    let conta = document.getElementById(tblId).rows.length;
    var filas = tabla.getElementsByTagName('tr')[conta - 1];
    var celdas = filas.getElementsByTagName('td')[0].firstChild;
    celdas.value = conta - 1;
    // console.log(celdas);
    // console.log(conta);
    // let row = table.insertRow();
    // let cell1 = row.insertCell(0);
    // let cell2 = row.insertCell(2);
    // let cell3 = row.insertCell(3);
    // let cell4 = row.insertCell(4);

    // cell1.innerHTML = "<input type='text' class='form-control datosTabla' id='' placeholder='' value=" + conta + " disabled>";
    // cell2.innerHTML = "<input type='text' class='form-control datosTabla' id='fila"+conta+"' placeholder='' value='' required>";
    // cell3.innerHTML = "<input type='text' class='form-control datosTabla' id='' placeholder='' value'' required=''>";
    // cell4.innerHTM   L = "<input type='text' class='form-control datosTabla' id='' placeholder='' value'' required=''>";


    // const tabla = document.getElementById('tabla').insertRow();
    // const celda1 = tabla.insertCell(0);
    // const celda2 = tabla.insertCell(1);
    // const celda3 = tabla.insertCell(2);
    // const celda4 = tabla.insertCell(3);


    // celda1.innerHTML='<input type="text" class="form-control" id="cod" placeholder="" value="" required>';
    // celda2.innerHTML='<input type="text" class="form-control" id="sm1" placeholder="" value="" disabled>';
    // celda3.innerHTML='<input type="text" class="form-control" id="sm2" placeholder="" value="" required="">';
    // celda4.innerHTML='<input type="text" class="form-control" id="sm3" placeholder="" value="" required="">';


}

function eliminaFila() {
    let table = document.getElementById("tabla");
    let rowCount = table.rows.length;
    if (rowCount > 2) {
        table.deleteRow(rowCount - 1);
    }
}

