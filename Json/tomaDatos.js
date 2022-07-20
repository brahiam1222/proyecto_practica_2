// const botonEnviar = document.getElementById('enviarterminacion');
// var ArrayRacimosCortados = new Array();
// var jsonRacimos = [];
// var ArrayRacimosRepicados = new Array();
// var jsonRepiques = [];
// var ArrayTabla = new Array();
// var ArrayDefectos = new Array();

// botonEnviar.addEventListener('click', function (e) {
//     var rCortados = document.getElementsByClassName('racimos'),
//         valueRacimosCortados = [].map.call(rCortados, function (input) {
//             ArrayRacimosCortados.push(input.value);
//         });

//     var rRepicados = document.getElementsByClassName('repicados'),
//         valueRacimosRepicados = [].map.call(rRepicados, function (input2) {
//             ArrayRacimosRepicados.push(input2.value);
//         });

   




    


//     // var defectos = document.getElementsByClassName('defecto1'),
//     // valueDefectos = [].map.call(defectos, function (input3) {
//     //     ArrayDefectos.push(input3.value);
//     // });
//     // console.log(ArrayDefectos);
//     // console.log(defectos);
//     // tomar el valor de los defectos



//     //leer dato de tabla y guardarlo en json
//     var tabla = document.getElementById('tabla');
//     var filas = tabla.getElementsByTagName('tr');
//     for (var i = 1; i < filas.length; i++) {
//         var celdas = filas[i].getElementsByTagName('td');
//         var fila = {
//             "fila": celdas[0].firstChild.value,
//             "Cod": celdas[1].firstChild.value,
//             "Fruta": celdas[2].firstChild.value,
//             "Cjs": celdas[3].firstChild.value,
//             "CjsRechazadas": celdas[4].firstChild.value
//         };
//         ArrayTabla.push(fila);
//     }



//     // console.log(ArrayRacimosCortados);
//     // console.log(ArrayRacimosRepicados);

//     // var vTabla = document.getElementById('tabla');
//     // var vTd = document.getElementsByTagName('td');
//     // var vTr = document.getElementsByTagName('tr');

//     // console.log(vTd);
//     // // var vTabla = document.getElementsByTagName("td");
//     //     //recorred td de tabla
//     //     for (var i = 0; i < vTr.length; i++) {




//     //         console.log(vTabla[i].firstChild.value);
//     //         ArrayTabla.push(vTabla[i].firstChild.value);
//     //     }

//     // valueTabla = [].map.call(vTabla, function (input3) {
//     //     ArrayTabla.push(input3.value);
// });









// document.querySelector('#enviarterminacion').addEventListener('click', guardarTerminacion);


// function guardarTerminacion() {


//     var finca = document.querySelector('#fincas').value,
//         aRecorrida = document.getElementById('area').value,
//         cjsEstimadas = document.getElementById('cajas').value,
//         pEmpaca = document.getElementById('empaca').value,
//         pCampo = document.getElementById('campo').value,
//         cMano = document.getElementById('mano').value,
//         sem5 = ArrayRacimosCortados[0],
//         sem6 = ArrayRacimosCortados[1],
//         sem7 = ArrayRacimosCortados[2],
//         sem8 = ArrayRacimosCortados[3],
//         sem9 = ArrayRacimosCortados[4],
//         sem10 = ArrayRacimosCortados[5],
//         sem11 = ArrayRacimosCortados[6],
//         sem12 = ArrayRacimosCortados[7],
//         sem13 = ArrayRacimosCortados[8],
//         rechazados = ArrayRacimosCortados[9],
//         Rsm5 = ArrayRacimosRepicados[0],
//         Rsm6 = ArrayRacimosRepicados[1],
//         Rsm7 = ArrayRacimosRepicados[2],
//         Rsm8 = ArrayRacimosRepicados[3],
//         Rsm9 = ArrayRacimosRepicados[4],
//         Rsm10 = ArrayRacimosRepicados[5],
//         Rsm11 = ArrayRacimosRepicados[6],
//         Rsm12 = ArrayRacimosRepicados[7],
//         //
//         //        
//         defecto1 = document.querySelector('#defecto1').value,
//         valDefecto1 = document.getElementById('valDefecto1').value,
//         defecto2 = document.querySelector('#defecto2').value,
//         valDefecto2 = document.getElementById('valDefecto2').value,
//         defecto3 = document.querySelector('#defecto3').value,
//         valDefecto3 = document.getElementById('valDefecto3').value,
//         // fExpor = document.getElementById('fexpor').value,
//         cjsNal = document.getElementById('cjsnal').value,
//         bolNacional = document.getElementById('bolnacional').value,
//         klsNacional = document.getElementById('klsnacional').value,
//         klsPersonal = document.getElementById('klspersonal').value,
//         klsFrPiso = document.getElementById('klsfrpiso').value;

//     terminacionDiaria(finca, aRecorrida, cjsEstimadas, pEmpaca, pCampo, cMano, sem5, sem6, sem7, sem8, sem9, sem10, sem11, sem12, sem13, rechazados, Rsm5, Rsm6, Rsm7, Rsm8, Rsm9, Rsm10, Rsm11, Rsm12, defecto1, valDefecto1, defecto2, valDefecto2, defecto3, valDefecto3, cjsNal, bolNacional, klsNacional, klsPersonal, klsFrPiso);

//     // //guardar datos a json
//     // var json = JSON.stringify(ArrayTabla);


//     // console.log(json);











// }
