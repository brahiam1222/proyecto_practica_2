var rutaActual = ("#rutaActual").val();

$(document).on("keyup", ".buscador", function (e) {

    e.preventDefault();
    if (e.keyCode == 13 && $(".buscador").val() != "") {
        var busqueda = $(this).val().toLowerCase();

        var expresion = /^[a-z0-9ñÑáéíóú]*$/;

        if (!expresion.test(busqueda)) {
            $(".buscador").val("");

        } else {

            var evaluarBusqueda = busqueda.replace(/[ñáéíóú]/g, "_");
            var rutaBuscador = evaluarBusqueda;
            window.location = rutaActual + rutaBuscador;


        }

    }
})


