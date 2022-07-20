<?php

require_once "../controlador/formulario-controlador.php";
require_once "../modelo/formulario-modelo.php";

//mostrar los datos de la base de datos en formato json



// $prueba = $_POST["listarTerminacion"];
// var_dump($prueba);



// $tabla = "terminacion";
// $respuesta = ModeloFormulario::mdlMostrarTerminacion($tabla);


class AjaxFormularios
{



    public $validarEmail;
    public $validarTerminacion;
    public $saveTerminacion;


    public function ajaxValidarEmail()
    {

        $item = "email";
        $valor = $this->validarEmail;

        $respuesta = ControladorFormulario::ctrSeleccionarUsuario($item, $valor);
        echo json_encode($respuesta);
    }
    public function ajaxGuardarTerminacion()
    {
        $tabla = "terminacion";
        $valor = $this->saveTerminacion;
        $fichero = '../Json/terminacion.json';
        $ficheroBD = '../Json/bdTerminacionJson.json';
        $actualJson = file_get_contents($fichero);
        $actualJsonBD = file_get_contents($ficheroBD);
        $actual = json_decode($actualJson, true);
        $actualBD = json_decode($actualJsonBD, true);
        $valorDecode = json_decode($valor, true);
        $actual[] = $valorDecode;
        $actualBD[] = $valorDecode;
        $actualJson = json_encode($actual);
        $actualJsonBD = json_encode($actualBD);

        file_put_contents($fichero, $actualJson);
        file_put_contents($ficheroBD, $actualJsonBD);

        // $valor = $this->validarTerminacion;
        $enviado = ControladorFormulario::ctrIngresarTerminacion($tabla);
        echo json_encode($enviado);
    }

    //recibir datos json
    public function ajaxTerminacion()
    {
        $tabla = "terminacion";
        // $valor = $this->validarTerminacion;
        $enviado = ControladorFormulario::ctrMostrarTerminacion($tabla);
        echo json_encode($enviado);
    }
}


if (isset($_POST["listarTerminacion"])) {

    $listar = new AjaxFormularios();
    $listar->validarTerminacion = $_POST["listarTerminacion"];
    $listar->ajaxTerminacion();
}
if (isset($_POST["guardarTerminacion"])) {

    $guardar = new AjaxFormularios();
    $guardar->saveTerminacion = $_POST["guardarTerminacion"]; // Estaba en encode
    $guardar->ajaxGuardarTerminacion();
}



if (isset($_POST["validarEmail"])) {

    $valEmail = new AjaxFormularios();
    $valEmail->validarEmail = $_POST["validarEmail"];
    $valEmail->ajaxValidarEmail();
}
