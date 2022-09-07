<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <link rel="stylesheet" href="../css/valid.css">
  <link rel="stylesheet" type="text/css" href="../css/plugins/notie.min.css">
  <script src="../js/plugins/notie.min.js"></script>

  <!-- <script src="Scripts/My Script File -1.7.1.js"></script> -->
  <?php

  require_once "../controlador/formulario-controlador.php";
  require_once "../modelo/formulario-modelo.php";

  //  $conexion = Conexion::conectar();
  //  echo '<pre>'; var_dump($conexion); echo '</pre>';
  // 
  ?>
  <title>Signin</title>







  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style> -->


  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-100 m-auto">
    <form id="formulario" method="post">
      <img class="mb-4" src="../img/icono.svg" alt="" width="120" height="80">
      <h1 class="h3 mb-3 fw-normal">Registre su cuenta</h1>

      <div class="form-floating">
        <input type="text" name="registroNombre" class="form-control" id="floatingInput" placeholder="Nombre">
        <label for="floatingInput">Nombre</label>
      </div>
      <div class="form-floating">
        <input type="email" name="registroEmail" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" name="registroContraseña" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
      </div>
      <div class="form-floating">
        <input type="password" name="registroConfirmarContraseña" class="form-control" id="floatingPassword" placeholder="Confirmar contraseña">
        <label for="floatingPassword">Confirmar contraseña</label>
      </div>

      <!-- <script>
      var password = document.getElementById("floatingPassword");
      var confirm_password = document.getElementById("floatingPassword2");

      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Las contraseñas no coinciden");
        } else {
          confirm_password.setCustomValidity('');
        }
      }

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script> -->

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar cuenta
        </label>
      </div>

      <?php

      $registro = ControladorFormulario::ctrRegistro();

      if ($registro == "ok") {

        echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
          </script>';

        echo  '<script>
        
        notie.alert({ 
          type:1,
          text:"Cuenta registrada con éxito.",
          position:"top",
          time: 5

          })
        
          </script>';
      } elseif ($registro == "specialCharacters") {

        echo   '<script>
        
        notie.alert({ 
          type:2,
          text:"No se permiten carácteres especiales.",
          position:"top",
          time: 5

          })
        
          </script>';
      } elseif ($registro == "existe") {
        echo  '<script>
        
        notie.alert({ 
          type:3,
          text:"Este correo ya está registrado.",
          position:"top",
          time: 5

          })
        
          </script>';
      }


      ?>


      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
      <a href="../vistas/ingreso.php">¿Ya tienes cuenta?</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
    </form>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="../js/script.js"></script>

</body>

</html>