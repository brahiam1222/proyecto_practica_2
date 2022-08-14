<?php if (isset($_GET["id"])) {
    $tabla = "terminacion";
    $item =  $_GET["id"];
    $respuesta = ControladorFormulario::ctrMostrarTerminacion($tabla, null, $item);
    $defectoDefault = ControladorFormulario::ctrMostrarTerminacion("tapas", null, null);
    // $frutaDefault = ControladorFormulario::ctrMostrarTerminacion("tapas", "cod", json_decode($respuesta[0]["fruta"])[1]->Fruta);
    // $fincaDefault = ControladorFormulario::ctrMostrarTerminacion("fincas", "id_fincas", json_decode($respuesta[0]["finca"]));
    // var_dump(json_decode($respuesta[0]["defectos"])[2]->defecto3);
    // var_dump($defectoDefault);
    // var_dump(($fincaDefault["nombre"]));
    // var_dump($frutaDefault);
    // echo ("<br><br><br><br>");
    // echo(json_decode($respuesta["racimoscortados"])[0]->sem5);
    // print_r(($respuesta["racimoscortados"])[0]->sem5);
    // echo (json_decode($respuesta["defectos"])[1]->defecto2);
    // echo(json_decode($respuesta["racimoscortados"]->sem5));
}



?>

<div id="TerminacionActualizar" class="container-fluid centrarDiv">
    <div id="tablaterminacion" class="container-fluid">
        <div class="col-md-7 col-lg-8">

            <div class="col-md-7 col-lg-8">


                <!-- dato date -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Fecha</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"> Seleccione el día del embarque</label>
                                            <input type="date" value="<?php echo $respuesta[0]["fecha"]; ?>" class="form-control" id="fecha">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Select de fincas -->
                        <label for="fincas">Fincas</label>
                        <select class="form-control mb-3" id="fincas">

                            <?php $datosTerminacion = ControladorFormulario::ctrMostrarTerminacion("fincas", null, null)    ?>
                            <?php $fincaDefault = ControladorFormulario::ctrMostrarTerminacion("fincas", "id_fincas", json_decode($respuesta[0]["finca"])); ?>
                            <option selected="true" value="<?php echo $fincaDefault["id_fincas"] ?>" disabled="disabled"><?php echo $fincaDefault["nombre"] ?></option>
                            <?php foreach ($datosTerminacion as $selectFincas) { ?>
                                <option value="<?php echo $selectFincas["id_fincas"];  ?>"><?php echo $selectFincas["nombre"];  ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <!-- <option value="MN">Manantiales</option>
    <option value="MD">Madelandia</option>
    <option value="SH">Santa Helena</option>
    <option value="CO">Corrales</option>
    <option value="GA">Galilea</option>
    <option value="CU">Curazao</option> -->
                    <form class="form-inline" novalidate="">
                        <div class="row g-3">
                            <div class="col-sm-2 form-group">
                                <label for="area" class="form-label">Area Recorrida</label>
                                <input type="text" class="form-control" id="area" placeholder="" value="<?php echo $respuesta[0]["arecorrida"]; ?>" required="">

                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="cajas" class="form-label">Cajas Estimadas</label>
                                <input type="text" class="form-control" id="cajas" placeholder="" value="<?php echo $respuesta[0]["cjsestimadas"]; ?>" required="">

                            </div>

                            <div class="col-sm-2 form-group">
                                <label for="empaca" class="form-label">Persona Empacadora</label>
                                <input type="text" class="form-control" id="empaca" placeholder="" value="<?php echo $respuesta[0]["pempaca"]; ?>" required="">

                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="campo" class="form-label">Persona Campo</label>
                                <input type="text" class="form-control" id="campo" placeholder="" value="<?php echo $respuesta[0]["pcampo"]; ?>" required="">

                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="mano" class="form-label">Calibre 2da Mano</label>
                                <input type="text" class="form-control" id="mano" placeholder="" value="<?php echo $respuesta[0]["cmano"]; ?>" required="">

                            </div>

                            <div class="separar">

                                <div class="col-sm-4 form-label">
                                    <a for="racimosCortados" id="enlace" class="form-label" onclick="emergentes('RacimosCortados')">Racimos Cortados</a>


                                </div>
                                <div id="RacimosCortados" class="col-sm-2 form-group venEmergente">
                                    <div id="Ventana">


                                        <button id="btnClose" type="button" onclick="sinemergentes('RacimosCortados')" class="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <input type="text" class="form-control racimos" id="sm5" placeholder="Corte 5 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem5) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm6" placeholder="Corte 6 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem6) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm7" placeholder="Corte 7 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem7) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm8" placeholder="Corte 8 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem8) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm9" placeholder="Corte 9 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem9) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm10" placeholder="Corte 10 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem10) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm11" placeholder="Corte 11 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem11) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm12" placeholder="Corte 12 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem12) ?>" required="">
                                        <input type="text" class="form-control racimos" id="sm13" placeholder="Corte 13 semanas" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->sem13) ?>" required="">
                                        <input type="text" class="form-control racimos" id="rechazados" placeholder="Racimos Rechazados" value="<?php echo (json_decode($respuesta[0]["racimoscortados"])[0]->rechazados) ?>" required="">
                                    </div>

                                </div>
                            </div>
                            <div class="separar">

                                <div class="col-sm-4 form-label">
                                    <a for="RacimosRepicados" id="enlace" class="form-label" onclick="emergentes('RacimosRepicados')">Racimos Repicados</a>


                                </div>
                                <div id="RacimosRepicados" class="col-sm-2 form-group venEmergente">
                                    <div id="Ventana">


                                        <button id="btnClose" type="button" onclick="sinemergentes('RacimosRepicados')" class="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <input type="text" class="form-control repicados" id="Rsm5" placeholder="Corte 5 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm5) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm6" placeholder="Corte 6 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm6) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm7" placeholder="Corte 7 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm7) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm8" placeholder="Corte 8 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm8) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm9" placeholder="Corte 9 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm9) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm10" placeholder="Corte 10 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm10) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm11" placeholder="Corte 11 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm11) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm12" placeholder="Corte 12 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm12) ?>" required="">
                                        <input type="text" class="form-control repicados" id="Rsm13" placeholder="Corte 13 semanas" value="<?php echo (json_decode($respuesta[0]["racimosrepicados"])[0]->Rsm13) ?>" required="">
                                    </div>

                                </div>
                            </div>

                            <!-- <div class="">
        <div class="row">

          <div class="col-sm-4 form-label">
            <a for="RacimosRepicados" class="form-label" onclick="emergentes('RacimosRepicados')" ondblclick="sinemergentes('RacimosRepicados')">Racimos Repicados</a>


          </div>
          <div id="RacimosRepicados" class="col-sm-2 form-group venEmergente">

            <input type="text" class="form-control repicados" id="Rsm5" placeholder="Corte 5 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm6" placeholder="Corte 6 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm7" placeholder="Corte 7 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm8" placeholder="Corte 8 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm9" placeholder="Corte 9 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm10" placeholder="Corte 10 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm11" placeholder="Corte 11 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm12" placeholder="Corte 12 semanas" value="" required="">
            <input type="text" class="form-control repicados" id="Rsm13" placeholder="Corte 13 semanas" value="" required="">


          </div>
        </div>

      </div> -->
                            <div class="">


                                <div class="col-sm-6 form-group divAjustable">

                                    <label for="defecto1">Defecto 1</label>
                                    <div class="input-group">

                                        <td><select class="form-control mb-3" id="defecto1">


                                                <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos", null, null); ?>
                                                <?php $defectoDefault = ControladorFormulario::ctrMostrarTerminacion("defectos", "codigo", json_decode($respuesta[0]["defectos"])[0]->defecto1); ?>

                                                <?php if (json_decode($respuesta[0]["defectos"])[0]->defecto1 == "" || json_decode($respuesta[0]["defectos"])[0]->defecto1 == "NULL") {  ?>
                                                    <?php foreach ($datosDefecto as $selectDefecto) { ?>
                                                        <option value="NULL">Seleccione el Defecto</option>
                                                        <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>

                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <option selected="true" value="<?php echo $defectoDefault["codigo"] ?>" disabled="disabled"><?php echo $defectoDefault["nombre"] ?></option>
                                                    <?php foreach ($datosDefecto as $selectDefecto) { ?>
                                                        <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>

                                                    <?php } ?>
                                                <?php } ?>
                                            </select></td>

                                        </select></td>

                                        <input class="form-control mb-3" value="<?php echo (json_decode($respuesta[0]["defectos"])[0]->valDefecto1);  ?>" id="valDefecto1" type="text">
                                        <span class=""> % </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group divAjustable">

                                    <label for="defecto2">Defecto 2</label>
                                    <div class="input-group">

                                        <td><select class="form-control mb-3" id="defecto2">


                                                <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos", null, null); ?>
                                                <?php $defectoDefault = ControladorFormulario::ctrMostrarTerminacion("defectos", "codigo", json_decode($respuesta[0]["defectos"])[1]->defecto2); ?>

                                                <?php if (json_decode($respuesta[0]["defectos"])[1]->defecto2 == "" || json_decode($respuesta[0]["defectos"])[1]->defecto2 == "NULL") {  ?>
                                                    <?php foreach ($datosDefecto as $selectDefecto) { ?>
                                                        <option value="NULL">Seleccione el Defecto</option>
                                                        <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>

                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <option selected="true" value="<?php echo $defectoDefault["codigo"] ?>" disabled="disabled"><?php echo $defectoDefault["nombre"] ?></option>
                                                    <?php foreach ($datosDefecto as $selectDefecto) { ?>
                                                        <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>

                                                    <?php } ?>
                                                <?php } ?>
                                            </select></td>
                                        <input class="form-control mb-3" value="<?php echo (json_decode($respuesta[0]["defectos"])[1]->valDefecto2);  ?>" id="valDefecto2" type="text">
                                        <span class=""> % </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group divAjustable">

                                    <label for="defecto3">Defecto 3</label>
                                    <div class="input-group">

                                        <td><select class="form-control mb-3" id="defecto3">


                                                <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos", null, null); ?>
                                                <?php $defectoDefault = ControladorFormulario::ctrMostrarTerminacion("defectos", "codigo", json_decode($respuesta[0]["defectos"])[2]->defecto3); ?>

                                                <?php if (json_decode($respuesta[0]["defectos"])[2]->defecto3 == "" || json_decode($respuesta[0]["defectos"])[2]->defecto3 == "NULL") {  ?>
                                                    <?php foreach ($datosDefecto as $selectDefecto) { ?>
                                                        <option value="NULL">Seleccione el Defecto</option>
                                                        <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>

                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <option selected="true" value="<?php echo $defectoDefault["codigo"] ?>" disabled="disabled"><?php echo $defectoDefault["nombre"] ?></option>
                                                    <?php foreach ($datosDefecto as $selectDefecto) { ?>
                                                        <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>

                                                    <?php } ?>
                                                <?php } ?>
                                            </select></td>
                                        <input class="form-control mb-3" value="<?php echo (json_decode($respuesta[0]["defectos"])[2]->valDefecto3);  ?>" id="valDefecto3" type="text">
                                        <span class=""> % </span>
                                    </div>
                                </div>
                            </div>





                            <div class="">
                                <div class="row">

                                    <div class="col-sm-4 form-label">
                                        <a for="FrutaExportada" id="enlace" class="form-label" onclick="emergentes('FrutaExportada')">Fruta Exportada</a>


                                    </div>
                                    <div id="FrutaExportada" class="col-sm-6 form-group venEmergente">
                                        <div id="Ventana">
                                            <button id="btnClose" type="button" onclick="sinemergentes('FrutaExportada')" class="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>


                                            <!-- tabla de 4 columnas -->
                                            <table id="tabla" class="table table-bordered">
                                                <?php $conteo = 0  ?>
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Fruta</th>
                                                        <th>Cantidad</th>
                                                        <th>Rechazo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php for ($i = 0; $i < count(json_decode($respuesta[0]["fruta"])); $i++) { ?>


                                                            <?php if (json_decode($respuesta[0]["fruta"])[$i]->Fruta != "" && json_decode($respuesta[0]["fruta"])[$i]->Fruta != "NULL") { ?>
                                                                <td><input type="text" class="form-control datosTabla" id="fila" placeholder="" value="<?php echo (json_decode($respuesta[0]["fruta"])[$i]->fila); ?>" disabled></td>
                                                                <td><select class="form-control mb-3" id="Tapas">


                                                                        <?php var_dump(json_decode($respuesta[0]["fruta"])[$i]->Fruta); ?>
                                                                        <?php $datosFruta = ControladorFormulario::ctrTraerFruta("tapas"); ?>
                                                                        <?php $frutaDefault = ControladorFormulario::ctrMostrarTerminacion("tapas", "cod", json_decode($respuesta[0]["fruta"])[$i]->Fruta); ?>

                                                                        <option>Seleccione una Fruta</option>
                                                                        <option selected="true" value="<?php echo $frutaDefault["cod"] ?>" disabled="disabled"><?php echo $frutaDefault["descripcion"]
                                                                                                                                                                ?></option>
                                                                        <?php foreach ($datosFruta as $selectFrutas) { ?>
                                                                            <option value="<?php echo ($selectFrutas["cod"]);  ?>"><?php echo ($selectFrutas["descripcion"]);  ?></option>
                                                                        <?php } ?>
                                                                        <!-- COMO MIERDA HAGO ESTO!!! -->
                                                                    </select></td>

                                                                <td><input type="text" class="form-control datosTabla" id="" placeholder="" value="<?php echo (json_decode($respuesta[0]["fruta"])[$i]->Cjs); ?>" required=""></td>
                                                                <td><input type="text" class="form-control datosTabla" id="" placeholder="" value="<?php echo (json_decode($respuesta[0]["fruta"])[$i]->CjsRechazadas); ?>" required=""></td>
                                                            <?php } else {
                                                                var_dump(json_decode($respuesta[0]["fruta"])[$i]->Fruta); ?>

                                                                <td><input type="text" class="form-control datosTabla" id="fila" placeholder="" value="<?php echo (json_decode($respuesta[0]["fruta"])[$i]->fila); ?>" disabled></td>
                                                                <td><select class="form-control mb-3" id="Tapas">

                                                                        <?php $datosFruta = ControladorFormulario::ctrTraerFruta("tapas"); ?>


                                                                        <option>Seleccione una Fruta</option>

                                                                        <?php foreach ($datosFruta as $selectFrutas) { ?>
                                                                            <option value="<?php echo ($selectFrutas["cod"]);  ?>"><?php echo ($selectFrutas["descripcion"]);  ?></option>
                                                                        <?php } ?>

                                                                    </select></td>
                                                                <td><input type="text" class="form-control datosTabla" id="" placeholder="" value="" required=""></td>
                                                                <td><input type="text" class="form-control datosTabla" id="" placeholder="" value="" required=""></td>

                                                            <?php  } ?>
                                                    </tr>




                                                <?php } ?>


                                            </table>

                                            <input type="button" class="button" id="button-eliminar" value="-" onclick="eliminaFila()">
                                            <input type="button" class="button" id="button-agregar" value="+" onclick="insertaFila('tabla')">
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-2 form-group">
                                <label for="area" class="form-label">Cajas Nacional</label>
                                <input type="text" class="form-control" id="cjsnal" placeholder="" value="<?php echo (json_decode($respuesta[0]["cjsnal"]));  ?>" required="">

                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="cajas" class="form-label">Bolsas Nacional</label>
                                <input type="text" class="form-control" id="bolnacional" placeholder="" value="<?php echo (json_decode($respuesta[0]["blsnacional"]));  ?>" required="">

                            </div>

                            <div class="col-sm-2 form-group">
                                <label for="empaca" class="form-label">Kilos Nacional</label>
                                <input type="text" class="form-control" id="klsnacional" placeholder="" value="<?php echo (json_decode($respuesta[0]["klsnacional"]));  ?>" required="">

                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="campo" class="form-label">Kilos a Personal</label>
                                <input type="text" class="form-control" id="klspersonal" placeholder="" value="<?php echo (json_decode($respuesta[0]["klspersonal"]));  ?>" required="">

                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="mano" class="form-label">Kilos Fruta de Piso</label>
                                <input type="text" class="form-control" id="klsfrpiso" placeholder="" value="<?php echo (json_decode($respuesta[0]["klsfrpiso"]));  ?>" required="">

                            </div>






                            <hr class="my-4">
                            <div id="mensaje"></div>
                            <button class="w-50 btn btn-primary btn-lg" id="actualizarTerminacion" type="button">Actualizar Terminacion</button>
                            <!-- <button type="button" class="btn btn-primary" id="actualizaTabla">Actualizar</button> -->
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<script src="./js/navActualizar.js"></script>
<script src="./js/actualizarTerminacion.js"></script>