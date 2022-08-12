<?php
require_once "conexion.php";
class ModeloFormulario
{

    static public function mdlRegistro($tabla, $datos)
    {
        //buscar similutud de correo
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :email");
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return "existe";
        } else {



            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, email, password) VALUES (:token, :nombre, :email, :password)");

            $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

            if ($stmt->execute()) {

                return "ok";
            } else {

                return "error";
            }

            // $stmt->close();
            $stmt = null;
        }
    }

    //mostrar terminacion
    static public function mdlMostrarTerminacion($tabla,$columna, $item)
    {
        if ($columna != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :item");
            $stmt->bindParam(":item", $item, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        } elseif ($columna == null && $item != null) {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id = :item");
            $stmt->bindParam(":item", $item, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
    
            // $stmt->close();
            $stmt = null;
        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
    
            // $stmt->close();
            $stmt = null;
        }
    }
    static public function mdlMostrarTerTabla($tabla)
    {

        $valor = file_get_contents('./Json/terminacion.json');
        $valorTabla = json_decode($valor, true);

        //inner join de fecha y finca



        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla, fincas 
                                                        WHERE fecha = :fecha 
                                                        AND finca = :finca
                                                        AND terminacion.finca = fincas.id_fincas;");

                                            
        $stmt->bindParam(":fecha", $valorTabla[0][0]["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":finca", $valorTabla[0][0]["finca"], PDO::PARAM_STR);
        $stmt->execute();
        // echo json_encode($valorTabla[0][0]["finca"]);
        // echo (json_encode($stmt->fetchAll()));


        if ($stmt->execute()) {
            $fichero = './Json/terminacion.json';
            $actualJson = file_get_contents($fichero);
            // $actual = json_decode($actualJson,true);
            // $valorDecode = json_decode($valor,true);
            // $actual[] = $valorDecode;
             $actualJson = json_encode(null);

            file_put_contents($fichero, $actualJson);
            return $stmt->fetchAll();
        } else {
            return "error";
        }
        // $stmt->close();
        $stmt = null;
    }



//*IDEA* Traer los datos de fruta al momento de dar click en el "Boton" (Fruta Exportada) con js.


    static public function mdlTraerFruta($tabla)
    {

        // $valor = file_get_contents('./Json/bdFrutas.json');
        // $valorFrutas = json_decode($valor, true);

        //inner join de fecha y finca


        // echo json_encode($valorFrutas);

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        // $stmt->bindParam(":cod", $valorFrutas[0][0]["ArrayCode"][0]["cod"], PDO::PARAM_STR);
        
        // foreach($valorFrutas as $codigo){

        //     if (     ) {
                
        //     }



        // }

        $stmt->execute();
         // echo json_encode($valorFrutas[0][0]["cod"]);


        if ($stmt->execute()) {
            // $fichero = './Json/bdFrutas.json';
            // $actualJson = file_get_contents($fichero);
            // $actual = json_decode($actualJson,true);
            // $valorDecode = json_decode($valor,true);
            // $actual[] = $valorDecode;
            //   $actualJson = json_encode(null);
            //  echo count($valorFrutas[0][0]["ArrayCode"]);

            // file_put_contents($fichero, $actualJson);
            return $stmt->fetchAll();
        } else {
            return "error";
        }
        // $stmt->close();
        $stmt = null;
    }






    //ingresar datos en la base de datos
    static public function mdlIngresarTerminacion($tabla)
    {
  
        $valor = file_get_contents('../Json/terminacion.json');
        $valorTerminacion = json_decode($valor, true);


        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( `id`, `fecha`, `finca`, `arecorrida`, `cjsestimadas`, `pempaca`, 
                                                                    `pcampo`, `cmano`,  `racimoscortados`, `racimosrepicados`, `defectos`,
                                                                    `cjsnal`, `blsnacional`, `klsnacional`, `klspersonal`, `klsfrpiso`, `fruta`)

         VALUES (NULL,  '" . $valorTerminacion[0][0]["fecha"] . "',
                        '" . $valorTerminacion[0][0]["finca"] . "',
                        '" . $valorTerminacion[0][0]["aRecorrida"] . "',
                        '" . $valorTerminacion[0][0]["cjsEstimadas"] . "',
                        '" . $valorTerminacion[0][0]["pEmpaca"] . "',
                        '" . $valorTerminacion[0][0]["pCampo"] . "',
                        '" . $valorTerminacion[0][0]["cMano"] . "',
                        '" . json_encode($valorTerminacion[0][0]["RacimosCortados"]) . "',
                        '" . json_encode($valorTerminacion[0][0]["Repiques"]) . "',
                        '" . json_encode($valorTerminacion[0][0]["Defectos"]) . "',
                        '" . $valorTerminacion[0][0]["cjsNal"] . "',                        
                        '" . $valorTerminacion[0][0]["bolNacional"] . "',                        
                        '" . $valorTerminacion[0][0]["klsNacional"] . "',                        
                        '" . $valorTerminacion[0][0]["klsPersonal"] . "',                        
                        '" . $valorTerminacion[0][0]["klsFrPiso"] . "',                        
                        '" . json_encode($valorTerminacion[0][0]["ArrayTabla"]) . "'
                    
                    
                    );");


        if ($stmt->execute()) {
            $fichero = '../Json/terminacion.json';
            $actualJson = file_get_contents($fichero);
            // $actual = json_decode($actualJson,true);
            // $valorDecode = json_decode($valor,true);
            // $actual[] = $valorDecode;
             $actualJson = json_encode(null);

            file_put_contents($fichero, $actualJson);
            return $valorTerminacion;
        } else {
            return "error";
        }
        $stmt = null;

    }
    static public function mdlActualizarTerminacion($tabla)
    {
  
        $valor = file_get_contents('../Json/terminacion.json');
        $valorTerminacion = json_decode($valor, true);
        // echo json_decode($valorTerminacion);
        // echo $id;


        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET `fecha`='" . $valorTerminacion[0][0]["fecha"] . "' 
                                                                    , `finca`='" . $valorTerminacion[0][0]["finca"] . "' 
                                                                    , `arecorrida`='" . $valorTerminacion[0][0]["aRecorrida"] . "' 
                                                                    , `cjsestimadas`='" . $valorTerminacion[0][0]["cjsEstimadas"] . "' 
                                                                    , `pempaca`='" . $valorTerminacion[0][0]["pEmpaca"] . "' 
                                                                    , `pcampo`='" . $valorTerminacion[0][0]["pCampo"] . "' 
                                                                    , `cmano`='" . $valorTerminacion[0][0]["cMano"] . "' 
                                                                    , `racimoscortados`='" . json_encode($valorTerminacion[0][0]["RacimosCortados"]) . "' 
                                                                    , `racimosrepicados`='" . json_encode($valorTerminacion[0][0]["Repiques"]) . "' 
                                                                    , `defectos`='" . json_encode($valorTerminacion[0][0]["Defectos"]) . "' 
                                                                    , `cjsnal`='" . $valorTerminacion[0][0]["cjsNal"] . "' 
                                                                    , `blsnacional`='" . $valorTerminacion[0][0]["bolNacional"] . "' 
                                                                    , `klsnacional`='" . $valorTerminacion[0][0]["klsNacional"] . "' 
                                                                    , `klspersonal`='" . $valorTerminacion[0][0]["klsPersonal"] . "' 
                                                                    , `klsfrpiso`='" . $valorTerminacion[0][0]["klsFrPiso"] . "' 
                                                                    , `fruta`='" . json_encode($valorTerminacion[0][0]["ArrayTabla"]) . "'
                                                                       WHERE id = '" . $valorTerminacion[0][0]["id"] . "'");


        if ($stmt->execute()) {
            $fichero = '../Json/terminacion.json';
            $actualJson = file_get_contents($fichero);
            // $actual = json_decode($actualJson,true);
            // $valorDecode = json_decode($valor,true);
            // $actual[] = $valorDecode;
             $actualJson = json_encode(null);
            //  echo $valorTerminacion[0][0]["id"];

            file_put_contents($fichero, $actualJson);
            return $valorTerminacion;
        } else {
            return "error";
        }
        $stmt = null;

    }
        static public function mdlBorrarTerminacion($tabla, $id)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $stmt = null;
    }

    static public function mdlSeleccionarUsuario($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();
    }




    static public function mdlLogin($tabla, $columna, $datos)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");

        $stmt->bindParam(":" . $columna, $datos, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        // $stmt->close();
        $stmt = null;
    }


    static public function mdlActualizarIntentos($tabla, $valor, $token)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE token = :token");

        $stmt->bindParam(":intentos", $valor, PDO::PARAM_INT);
        $stmt->bindParam(":token", $token, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        // $stmt->close();
        $stmt = null;
    }
}
