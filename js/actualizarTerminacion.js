const botonActualizar = document.getElementById('actualizarTerminacion');
const msg = document.getElementById('mensaje');

botonActualizar.addEventListener('click', function (e) {

    $(function () {
        // listar();
        actualizar();

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
            "fila": i,
            // "Cod": celdas[1].firstChild.value,
            "Fruta": celdas[1].firstChild.value,
            "Cjs": celdas[2].firstChild.value,
            "CjsRechazadas": celdas[3].firstChild.value
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
        Rsm13 = ArrayRacimosRepicados[8],
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
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var anuncioParam = urlParams.get('id');
        console.log(anuncioParam)


    function datosTerminacion() {
        var data = [];
        data.push({
            "id":anuncioParam,
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
                    "Rsm12": Rsm12,
                    "Rsm13": Rsm13
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

    function actualizar() {


        //     let jsonData = JSON.stringify(datosTerminacion());
        //     fs.writeFileSync('./Json/terminacion.json', jsonData);
        //     console.log('terminacion.json guardado');
        //     alert('terminacion.json guardado');
        // }


        datos = new FormData();
        datos.append("actualizarTerminacion", JSON.stringify(datosTerminacion())); //Json Stringfy
        console.log(datosTerminacion());
        //  console.log(datos);
        //  var guardarJSON = JSON.stringify(datosTerminacion());

       

        __ajax("./ajax/formulario.ajax.php", datos)
            .done(function (enviado) {
                msg.innerHTML = `<div class="alert alert-success" role="alert">
                             Terminacion Actualizada con éxito!
                           </div>`;
                location.href="index.php?pagina=contenido-cuerpo";
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