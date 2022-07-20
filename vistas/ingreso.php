<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
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
    <form method="post">
      <img class="mb-4" src="../img/icono.svg" alt="" width="120" height="80">
      <h1 class="h3 mb-3 fw-normal">Digite su cuenta</h1>

      <div class="form-floating">
        <input type="email" name="loginEmail" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" name="loginContraseña" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar cuenta
        </label>
      </div>


      <?php


      // $verif=$_POST['loginEmail'];
      // $verif2=$_POST['loginContraseña'];
      // echo $verif;
      // echo $verif2;
      $ingreso =  new ControladorFormulario();
      $ingreso->ctrLogin();




      //comparar contraseña
      //   if($ingreso!=null){

      //     if ($ingreso["email"] == $_POST["loginEmail"] && $ingreso["password"] == $_POST["loginContraseña"]) {
      //       $valid = true;
      //         if ($valid==true) {
      //           echo '<script>
      //           window.location = "../index.php?pagina=inicio";
      //           </script>';
      //           session_start();
      //         }

      //       // echo '<script>
      //       // window.location = "../index.php";
      //       // </script>';
      //   }
      //   else{

      //     echo '<div class="alert alert-danger">Error al ingresar</div>';
      //     // alerta



      //   }
      // }


      ?>


      <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
      <div class="checkbox mb-3">

        <a href="../vistas/registro.php">Registrarse</a>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
    </form>
  </main>



</body>

</html>