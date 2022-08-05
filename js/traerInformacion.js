const actualizaTabla = document.getElementById('actualizaTabla');

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