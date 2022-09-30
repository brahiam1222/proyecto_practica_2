const botonEnviar = document.getElementById('enviarterminacion');

botonEnviar.addEventListener('click', function (e) {

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

        var 
        // fecha = document.getElementById('fecha').value,
        // finca = document.querySelector('#fincas').value,
        // aRecorrida = document.getElementById('area').value,
        // cjsEstimadas = document.getElementById('cajas').value,
        // pEmpaca = document.getElementById('empaca').value,
        // pCampo = document.getElementById('campo').value,
        // cMano = document.getElementById('mano').value,
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
        Rsm13 = ArrayRacimosRepicados[8]
        //
        //        
        // defecto1 = document.querySelector('#defecto1').value,
        // valDefecto1 = document.getElementById('valDefecto1').value,
        // defecto2 = document.querySelector('#defecto2').value,
        // valDefecto2 = document.getElementById('valDefecto2').value,
        // defecto3 = document.querySelector('#defecto3').value,
        // valDefecto3 = document.getElementById('valDefecto3').value,
        // // fExpor = document.getElementById('fexpor').value,
        // cjsNal = document.getElementById('cjsnal').value,
        // bolNacional = document.getElementById('bolnacional').value,
        // klsNacional = document.getElementById('klsnacional').value,
        // klsPersonal = document.getElementById('klspersonal').value,
        // klsFrPiso = document.getElementById('klsfrpiso').value;



    });
