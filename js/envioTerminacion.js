const botonEnviar = document.getElementById('enviarterminacion');
const msg = document.getElementById('mensaje');
const TbTerminacion = document.getElementById("tablaTerminaciones");




const actualizaTabla = document.getElementById('actualizaTabla');
const traerFruta = document.getElementById('tabla');
// let generaTabla = document.querySelector('#generaTabla');



traerFruta.addEventListener('change', function (e) {
    e.preventDefault();
    var ArrayCode = new Array();

   
    


    var tabla = document.getElementById('tabla');
    var filas = tabla.getElementsByTagName('tr');
    for (var i = 1; i < filas.length; i++) {
        var celdas = filas[i].getElementsByTagName('td');
        var fila = {            
            "cod": celdas[1].firstChild.value,                        
        };
        ArrayCode.push(fila);
    }


    $(function () {
        traerFruta();
        
     });

     

    function datCodigos() {
        var dataCode = [];
        dataCode.push({
            "ArrayCode": ArrayCode            
        })
        var jsdataCodeTerminacion = { "dataCode": dataCode };
        return dataCode //jsData--;

    }


    function traerFruta() {
        
        datos = new FormData();
        datos.append("traerFruta", JSON.stringify(datCodigos()));
        
        // console.log(JSON.stringify(datCodigos()));
        __ajax("./ajax/formulario.ajax.php", datos)
            .done(function (enviado) {

            }
            )
            .fail(function () {
                // console.log("error");
                // window.location.reload();
            }

            );
    }

    function __ajax(url, datos) {
        var ajax = $.ajax({
            url: url,
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json"
        });
        return ajax;
    }

    // console.log(ArrayCode);



    // var conteoFilas = document.getElementsByTagName('tr').length;
    // var valorCode = document.getElementById('fila1');
    // // var valorCode2 = valorCode.getElementsById('fila1');
    // console.log(conteoFilas);
    // //for para crear variables nuevas por cada fila
    // for (let i = 0; i < conteoFilas; i++) {
    //     var valorCode = document.getElementById('fila' + i).value;
    //     console.log(valorCode);
    //         //añadir un id a cada tr fruta al igual que se hizo con la fila, para darle valores nuevos cuando sean leidos de la base de datos
    //     }
     

    // function datTabla() {
    //     var data = [];
    //     data.push({
    //         "fecha": valorFecha,
    //         "finca": valorFinca
    //     })
    //     var jsDataTerminacion = { "data": data };
    //     return data //jsData--;

    //}
}
);
    
actualizaTabla.addEventListener('click', function (e) {
    e.preventDefault();
    var valorFinca = document.querySelector('#terminacionesFincas').value,
        valorFecha = document.getElementById('fechaTabla').value;

    $(function () {
        crearTabla();   //crea la tabla
        
    });

    function datTabla() {
        var data = [];
        data.push({
            "fecha": valorFecha,
            "finca": valorFinca
        });
        var jsDataTerminacion = { "data": data };
        return data //jsData--;

    }
    
    
    
    function crearTabla() {
        
        datos = new FormData();
        datos.append("crearTabla", JSON.stringify(datTabla()));
        console.log(JSON.stringify(datTabla()));

        __ajax("./ajax/formulario.ajax.php", datos)
            .done(function (enviado) {

            }
            )
            .fail(function () {
                // console.log("error");
                window.location.reload();
            }

            );
    }


    function __ajax(url, datos) {
        var ajax = $.ajax({
            url: url,
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json"
        });
        return ajax;
    }

}
);


//     window.location.href = window.location.href + "?fechaS=" + valorFecha + "&fincaS=" + valorFinca;

// const datos = new FormData(generaTabla);
// // console.log(e.target.value);
// // console.log(valorFinca);

//     fetch('./vistas/paginas/modulos/contenido-cuerpo.php', {
//         method: 'POST',
//         body: datos
//         })

// });

// });


// console.log(fincaSeleccionada);    



botonEnviar.addEventListener('click', function (e) {

    $(function () {
        // listar();
        guardar();

    });


    var ArrayRacimosCortados = new Array();
    var jsonRacimos = [];
    var ArrayRacimosRepicados = new Array();
    var jsonRepiques = [];
    var ArrayTabla = new Array();
    var ArrayDefectos = new Array();
    var rCortados = document.getElementsByClassName('racimos'),
        valueRacimosCortados = [].map.call(rCortados, function (input) {
            ArrayRacimosCortados.push(input.value);
        });

    var rRepicados = document.getElementsByClassName('repicados'),
        valueRacimosRepicados = [].map.call(rRepicados, function (input2) {
            ArrayRacimosRepicados.push(input2.value);
        });
    var tabla = document.getElementById('tabla');
    var filas = tabla.getElementsByTagName('tr');
    for (var i = 1; i < filas.length; i++) {
        var celdas = filas[i].getElementsByTagName('td');
        var fila = {
            "fila": celdas[0].firstChild.value,
            "Cod": celdas[1].firstChild.value,
            "Fruta": celdas[2].firstChild.value,
            "Cjs": celdas[3].firstChild.value,
            "CjsRechazadas": celdas[4].firstChild.value
        };
        ArrayTabla.push(fila);
    }
    var fecha = document.getElementById('fecha').value,
        finca = document.querySelector('#fincas').value,
        aRecorrida = document.getElementById('area').value,
        cjsEstimadas = document.getElementById('cajas').value,
        pEmpaca = document.getElementById('empaca').value,
        pCampo = document.getElementById('campo').value,
        cMano = document.getElementById('mano').value,
        sem5 = ArrayRacimosCortados[0],
        sem6 = ArrayRacimosCortados[1],
        sem7 = ArrayRacimosCortados[2],
        sem8 = ArrayRacimosCortados[3],
        sem9 = ArrayRacimosCortados[4],
        sem10 = ArrayRacimosCortados[5],
        sem11 = ArrayRacimosCortados[6],
        sem12 = ArrayRacimosCortados[7],
        sem13 = ArrayRacimosCortados[8],
        rechazados = ArrayRacimosCortados[9],
        Rsm5 = ArrayRacimosRepicados[0],
        Rsm6 = ArrayRacimosRepicados[1],
        Rsm7 = ArrayRacimosRepicados[2],
        Rsm8 = ArrayRacimosRepicados[3],
        Rsm9 = ArrayRacimosRepicados[4],
        Rsm10 = ArrayRacimosRepicados[5],
        Rsm11 = ArrayRacimosRepicados[6],
        Rsm12 = ArrayRacimosRepicados[7],
        //
        //        
        defecto1 = document.querySelector('#defecto1').value,
        valDefecto1 = document.getElementById('valDefecto1').value,
        defecto2 = document.querySelector('#defecto2').value,
        valDefecto2 = document.getElementById('valDefecto2').value,
        defecto3 = document.querySelector('#defecto3').value,
        valDefecto3 = document.getElementById('valDefecto3').value,
        // fExpor = document.getElementById('fexpor').value,
        cjsNal = document.getElementById('cjsnal').value,
        bolNacional = document.getElementById('bolnacional').value,
        klsNacional = document.getElementById('klsnacional').value,
        klsPersonal = document.getElementById('klspersonal').value,
        klsFrPiso = document.getElementById('klsfrpiso').value;


    function datosTerminacion() {
        var data = [];
        data.push({
            "fecha": fecha,
            "finca": finca,
            "aRecorrida": aRecorrida,
            "cjsEstimadas": cjsEstimadas,
            "pEmpaca": pEmpaca,
            "pCampo": pCampo,
            "cMano": cMano,
            "RacimosCortados": [
                {
                    "sem5": sem5,
                    "sem6": sem6,
                    "sem7": sem7,
                    "sem8": sem8,
                    "sem9": sem9,
                    "sem10": sem10,
                    "sem11": sem11,
                    "sem12": sem12,
                    "sem13": sem13,
                    "rechazados": rechazados
                }
            ],

            "Repiques": [
                {
                    "Rsm5": Rsm5,
                    "Rsm6": Rsm6,
                    "Rsm7": Rsm7,
                    "Rsm8": Rsm8,
                    "Rsm9": Rsm9,
                    "Rsm10": Rsm10,
                    "Rsm11": Rsm11,
                    "Rsm12": Rsm12
                }
            ],
            "Defectos": [
                {
                    "defecto1": defecto1,
                    "valDefecto1": valDefecto1
                },
                {
                    "defecto2": defecto2,
                    "valDefecto2": valDefecto2
                },
                {
                    "defecto3": defecto3,
                    "valDefecto3": valDefecto3
                }
            ],

            "ArrayTabla": ArrayTabla,
            "cjsNal": cjsNal,
            "bolNacional": bolNacional,
            "klsNacional": klsNacional,
            "klsPersonal": klsPersonal,
            "klsFrPiso": klsFrPiso


        });
        var jsDataTerminacion = { "data": data };
        return data //jsData--;
    }



    // const fs = require('fs');

    function guardar() {


        //     let jsonData = JSON.stringify(datosTerminacion());
        //     fs.writeFileSync('./Json/terminacion.json', jsonData);
        //     console.log('terminacion.json guardado');
        //     alert('terminacion.json guardado');
        // }


        datos = new FormData();
        datos.append("guardarTerminacion", JSON.stringify(datosTerminacion())); //Json Stringfy
        //  console.log(datos);
        //  var guardarJSON = JSON.stringify(datosTerminacion());

        __ajax("./ajax/formulario.ajax.php", datos)
            .done(function (enviado) {
                msg.innerHTML = `<div class="alert alert-success" role="alert">
                             Terminacion subida con éxito!
                           </div>`;
                location.reload();
                // msg.innerHTML = `<div class="alert alert-danger" role="alert">
                // Error al enviar el mensaje!
                // </div>`;

                console.log(enviado);     //Json Stringfy
                //   console.log(enviado[0]["finca"]);
                //    var terminacionList = datosTerminacion();
                //   console.log(terminacionList);                
            }

            );
    }

    function __ajax(url, datos) {
        var ajax = $.ajax({
            url: url,
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json"
        });
        return ajax;
    }
});

