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
  <!-- <script src="https://kit.fontawesome.com/eeaede5d80.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/plugins/notie.min.css">
  <script src="../js/plugins/notie.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      $rutas = explode("/", $_GET["pagina"]);
      // echo '<prev class="bg-white">'; print_r($rutas[0]); echo '</prev>';

      if(isset($rutas[1])){
        if ($rutas[1] == "terminacionNew"||$rutas[1] == "tablaTerminacion"||$rutas[1] == "consolidado" || $rutas[1] == "lluvia"){
        include "./vistas/paginas/modulos/paginacion/".$rutas[1].".php";
        }
      }
      elseif ($rutas[0] == "contenido-inicio" ||  $rutas[0] == "contenido-cuerpo" || $rutas[0] == "contenido-consolidado" || $rutas[0] == "contenido-terminacion" || $rutas[0] == "contenido-lluvia" || $rutas[0] == "contenido-editar" || $rutas[0] == "contenido-borrar" || $rutas[0] == "salir") {

        //   echo  "<div class='alert alert-success'>
        //   <strong>¡Registro exitoso!</strong> Ya puedes ingresar.
        // </div>";

        $pagina = $rutas[0];
        $adicional = $rutas[0];
        //incluye la pagina dentro del body como debe hacerlo un pagina, pero el "Contenido-inicio" es otra página
        //hallar la forma de iniciar otra página al darle al botón inicio
        //Cambiar la forma de redirigir las páginas, usar el Dashboard para navegar entre consolidado, lluvia, etc. en sus href enviando gets
        //y el método de redigir actual usarlo para navegar entre páginas, no entre paginas --- o al contrario
        // el método de redigir con header puede ser una opción para cambiar entre informes u otras opciones

        include "./vistas/paginas/modulos/" . $pagina . ".php";
        echo '<pre>'; print_r($adicional); '</pre>';
      } 
      
      
      
      else {
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