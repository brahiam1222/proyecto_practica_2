<?php
session_start();


class ControladorFormulario
{

    static public function ctrRegistro()
    {

        if (isset($_POST["registroEmail"])) {

            if (
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["registroContraseña"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["registroNombre"])
            ) {

                $token = md5($_POST["registroEmail"] . $_POST["registroContraseña"]);
                $tabla = "usuario";
                $encriptar = crypt($_POST["registroContraseña"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


                $datos = array(
                    "token" => $token,
                    "nombre" => $_POST["registroNombre"],
                    "email" => $_POST["registroEmail"],
                    "password" => $encriptar
                );

                $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);
                return $respuesta;
            } else {

                $respuesta = "specialCharacters";
                return $respuesta;
            }
        }
    }


    static public function ctrSeleccionarUsuario($item, $valor)
    {

        $tabla = "usuario";

        $respuesta = ModeloFormulario::mdlSeleccionarUsuario($tabla, $item, $valor);

        return $respuesta;
    }

    // guardar datos en la base de datos
    static public function ctrMostrarTerminacion($tabla)
    {



        $respuesta = ModeloFormulario::mdlMostrarTerminacion($tabla);

        return $respuesta;
        echo ($respuesta);
    }
    static public function ctrIngresarTerminacion($tabla)
    {



        $respuesta = ModeloFormulario::mdlIngresarTerminacion($tabla);

        return $respuesta;
        echo ($respuesta);
    }



    public function ctrLogin()
    {


        if (isset($_POST["loginEmail"])) {
            if (
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginContraseña"])
            ) {

                $tabla = "usuario";
                $columna = "email";
                $datos = $_POST["loginEmail"];

                $respuesta = ModeloFormulario::mdlLogin($tabla, $columna, $datos);
                // print_r($respuesta); 

                $encriptar = crypt($_POST["loginContraseña"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                if ($respuesta != null) {



                    if ($respuesta["email"] == $_POST["loginEmail"] && $respuesta["password"] == $encriptar) {

                        ModeloFormulario::mdlActualizarIntentos($tabla, 0, $respuesta["token"]);
                        $_SESSION["validar"] = "ok";



                        echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }

                window.location = "../index.php?pagina=contenido-inicio";



          </script>';
                    }
                    if ($respuesta["intentos"] <= 3) {
                        if ($respuesta["email"] == $_POST["loginEmail"] && $respuesta["password"] != $_POST["loginContraseña"]) {

                            $tabla = "usuario";
                            $intentos_fallidos = $respuesta["intentos"] + 1;

                            ModeloFormulario::mdlActualizarIntentos($tabla, $intentos_fallidos, $respuesta["token"]);
                            print_r($intentos_fallidos);
                            echo '<script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
              </script>';

                            echo  "<div class='alert alert-danger'>
                      <strong>¡Error al ingresar!</strong> email o contraseña no coincide.
                    </div>";
                        } else {
                            echo  "<div class='alert alert-danger'>
                      <strong>¡Error al ingresar!</strong> email o contraseña no coincide.
                      </div>";
                        }
                    } else {
                        echo  "<div class='alert alert-warning'>
                      <strong>¡Error al ingresar!</strong> Demasiado número de intentos.
                      </div>";
                    }
                }
            } else {
                echo  "<div class='alert alert-danger'>
                  <strong>¡Error al ingresar!</strong> Ingrese datos válidos.
                  </div>";
            }
        }
    }
}
