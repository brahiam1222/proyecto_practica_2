<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <link href="./css/carousel.css" rel="stylesheet">
  <link href="./css/carousel.rtl.css" rel="stylesheet">
  <link href="./css/ventana.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Principal</title>
</head>

<body>

  <?php
  include "paginas/modulos/cabecera.php";


  // if (isset($_GET["pagina"])) {
  //   if ($_GET["pagina"] == "contenido-editar"){
  //   include "paginas/modulos/cabecera.php";


  //   $pagina = $_GET["pagina"];
    
  //   include "./vistas/paginas/modulos/" . $pagina . ".php";}
  // } else {


    if (isset($_GET["pagina"])) {

      if ($_GET["pagina"] == "contenido-inicio" ||  $_GET["pagina"] == "contenido-cuerpo" || $_GET["pagina"] == "contenido-consolidado" || $_GET["pagina"] == "contenido-terminacion" || $_GET["pagina"] == "contenido-lluvia" || $_GET["pagina"] == "contenido-editar" || $_GET["pagina"] == "salir") {

        //   echo  "<div class='alert alert-success'>
        //   <strong>¡Registro exitoso!</strong> Ya puedes ingresar.
        // </div>";

        $pagina = $_GET["pagina"];
        //incluye la pagina dentro del body como debe hacerlo un pagina, pero el "Contenido-inicio" es otra página
        //hallar la forma de iniciar otra página al darle al botón inicio
        //Cambiar la forma de redirigir las páginas, usar el Dashboard para navegar entre consolidado, lluvia, etc. en sus href enviando gets
        //y el método de redigir actual usarlo para navegar entre páginas, no entre paginas --- o al contrario
        // el método de redigir con header puede ser una opción para cambiar entre informes u otras opciones

        include "./vistas/paginas/modulos/" . $pagina . ".php";
      } else {
        include "./vistas/paginas/404.php";
      }
    } else {

      echo '<script> window.location = "./vistas/registro.php";</script>';
    }






    include "paginas/modulos/footer.php";
  

  //hacer la redirección de otras paginas en el contenido del cuerpo con el get paginas
  ?>

</body>

</html>