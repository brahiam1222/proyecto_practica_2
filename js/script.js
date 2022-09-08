/*======================
VALIDAR USER
=======================*/
const registro = document.getElementsByName('registroEmail')[0];
registro.addEventListener('keyup', (e) => {
    if (e.target.value <= "" || e.target.value == null) {
        registro.classList.add('is-invalid');
        registro.classList.remove('is-valid');

    }
    else {
        var email = e.target.value;
        var datos = new FormData();
        datos.append("validarEmail", email);
        // console.log(email);


        $.ajax({
            url: "../ajax/formulario.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (respuesta) {
                // console.log(registro);

                // console.log("respuesta", respuesta);
                if (respuesta) {
                    registro.classList.add('is-invalid');
                    registro.classList.remove('is-valid');
                } else {
                    registro.classList.add('is-valid');
                    registro.classList.remove('is-invalid');
                }


                console.log(respuesta);
            }
        });
    }
})

/*======================
BUSCADOR
=======================*/


// const selectFinca = document.querySelector('#terminacionesFincas').value;
// selectFinca.addEventListener('change', (e) => {
//     console.log(e.target.value);
// }
// )













//capturar name con jquery y agregarle funcion change
// $(document).ready(function(){
//     $("#name").change(function(){






// $(document).ready(function () {
//     $('form').submit(function (e) {
//         e.preventDefault();
//         var data = $(this).serializeArray();

//         $.ajax({
//             type: 'POST',
//             url: 'http://localhost:3000/api/users',
//             data: data,
//             success: function (data) {
//             }
//         }).done(function (data) {
//         });

//         console.log(data);
//     })
// });


// $(document).ready(function () {
//     $("#email").change(function () {
//         var email = $(this).val();
//         var datos = new FormData();
//         datos.append("validarEmail", email);
//         $.ajax({
//             url: 'ajax/formulario.ajax.php',
//             method: 'POST',
//             data: datos,
//             cache: false,
//             contentType: false,
//             processData: false,
//             success: function (respuesta) {
//                 console.log("respuesta", respuesta);
//             }
//         })
//     })
// });






