
<?php include "./vistas/paginas/modulos/contenido-cuerpo.php" ?>


<div id="Terminacion" class="container-fluid">
          <!-- <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Your cart</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div> -->
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
                          <input type="date" class="form-control" id="fecha">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



                <!-- Select de fincas -->
                <label for="fincas">Fincas</label>
                <select class="form-control mb-3" id="fincas">

                  <?php $datosTerminacion = ControladorFormulario::ctrMostrarTerminacion("fincas", null, null)    ?>
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
                    <input type="text" class="form-control" id="area" placeholder="" value="" required="">

                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="cajas" class="form-label">Cajas Estimadas</label>
                    <input type="text" class="form-control" id="cajas" placeholder="" value="" required="">

                  </div>

                  <div class="col-sm-2 form-group">
                    <label for="empaca" class="form-label">Persona Empacadora</label>
                    <input type="text" class="form-control" id="empaca" placeholder="" value="" required="">

                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="campo" class="form-label">Persona Campo</label>
                    <input type="text" class="form-control" id="campo" placeholder="" value="" required="">

                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="mano" class="form-label">Calibre 2da Mano</label>
                    <input type="text" class="form-control" id="mano" placeholder="" value="" required="">

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

                        <input type="text" class="form-control racimos" id="sm5" placeholder="Corte 5 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm6" placeholder="Corte 6 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm7" placeholder="Corte 7 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm8" placeholder="Corte 8 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm9" placeholder="Corte 9 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm10" placeholder="Corte 10 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm11" placeholder="Corte 11 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm12" placeholder="Corte 12 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="sm13" placeholder="Corte 13 semanas" value="" required="">
                        <input type="text" class="form-control racimos" id="rechazados" placeholder="Racimos Rechazados" value="" required="">
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


                    <div class="col-sm-6 form-group">

                      <label for="defecto1">Defecto 1</label>
                      <div class="input-group">

                        <td><select class="form-control mb-3" id="defecto1">


                            <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos", null, null); ?>
                            <option value="NULL">Seleccione el Defecto</option>

                            <?php foreach ($datosDefecto as $selectDefecto) { ?>
                              <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>
                            <?php } ?>

                          </select></td>

                        <input class="form-control mb-3" id="valDefecto1" type="text">
                        <span class=""> % </span>
                      </div>
                    </div>
                    <div class="col-sm-6 form-group">

                      <label for="defecto2">Defecto 2</label>
                      <div class="input-group">

                        <td><select class="form-control mb-3" id="defecto2">


                            <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos", null, null); ?>
                            <option value="NULL">Seleccione el Defecto</option>

                            <?php foreach ($datosDefecto as $selectDefecto) { ?>
                              <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>
                            <?php } ?>

                          </select></td>
                        <input class="form-control mb-3" id="valDefecto2" type="text">
                        <span class=""> % </span>
                      </div>
                    </div>
                    <div class="col-sm-6 form-group">

                      <label for="defecto3">Defecto 3</label>
                      <div class="input-group">

                        <td><select class="form-control mb-3" id="defecto3">


                            <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos", null, null); ?>
                            <option value="NULL">Seleccione el Defecto</option>

                            <?php foreach ($datosDefecto as $selectDefecto) { ?>
                              <option value="<?php echo ($selectDefecto["codigo"]);  ?>"><?php echo ($selectDefecto["nombre"]);  ?></option>
                            <?php } ?>

                          </select></td>
                        <input class="form-control mb-3" id="valDefecto3" type="text">
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
                              <tr id="filainicial">
                                <th>#</th>
                                <th>Fruta</th>
                                <th>Cantidad</th>
                                <th>Rechazo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="text" class="form-control datosTabla" id="fila" placeholder="" value="1" disabled></td>
                                <td><select class="form-control mb-3" id="Tapas">


                                    <?php $datosFruta = ControladorFormulario::ctrTraerFruta("tapas"); ?>
                                    <option value="NULL">Seleccione una Fruta</option>

                                    <?php foreach ($datosFruta as $selectFrutas) { ?>
                                      <option value="<?php echo ($selectFrutas["cod"]);  ?>"><?php echo ($selectFrutas["descripcion"]);  ?></option>
                                    <?php } ?>

                                  </select></td>

                                <td><input type="text" class="form-control datosTabla" id="" placeholder="" value="" required=""></td>
                                <td><input type="text" class="form-control datosTabla" id="" placeholder="" value="" required=""></td>
                              </tr>

                          </table>

                          <input type="button" class="button" id="button-eliminar" value="-" onclick="eliminaFila()">
                          <input type="button" class="button" id="button-agregar" value="+" onclick="insertaFila('tabla')">
                        </div>

                      </div>
                    </div>

                  </div>

                  <div class="col-sm-2 form-group">
                    <label for="area" class="form-label">Cajas Nacional</label>
                    <input type="text" class="form-control" id="cjsnal" placeholder="" value="" required="">

                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="cajas" class="form-label">Bolsas Nacional</label>
                    <input type="text" class="form-control" id="bolnacional" placeholder="" value="" required="">

                  </div>

                  <div class="col-sm-2 form-group">
                    <label for="empaca" class="form-label">Kilos Nacional</label>
                    <input type="text" class="form-control" id="klsnacional" placeholder="" value="" required="">

                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="campo" class="form-label">Kilos a Personal</label>
                    <input type="text" class="form-control" id="klspersonal" placeholder="" value="" required="">

                  </div>
                  <div class="col-sm-2 form-group">
                    <label for="mano" class="form-label">Kilos Fruta de Piso</label>
                    <input type="text" class="form-control" id="klsfrpiso" placeholder="" value="" required="">

                  </div>






                  <hr class="my-4">
                  <div id="mensaje"></div>
                  <button class="w-50 btn btn-primary btn-lg" id="enviarterminacion" type="button">Registrar Terminacion</button>
              </form>
            </div>
          </div>






          <!--<div id="Terminacion" class="container-fluid">

           
          <div class="form-group">
            <label for="fincas">Fincas</label>
            <select class="form-control" id="fincas">
              <option>Manantiales</option>
              <option>Madelandia</option>
              <option>Santa_Helena</option>
              <option>Corrales</option>
              <option>Galilea</option>
              <option>Curazao</option>
            </select>
            </div>

            


            <div class="form-control">
              <p>Area Recorrida: <input type="text" name="nombre"></p>
            </div>
            <div class="form-control">
              <p>Cajas Estimadas: <input type="text" name="Cjsestimadas"></p>
            </div>
            <div class="form-control">
              <p>Persona Empacadora: <input type="text" name="P_Empacadora"></p>
            </div>
            <div class="form-control">
              <p>Persona Campo: <input type="text" name="P_Campo"></p>
            </div>

          </div>-->



        </div>
        <script src="./js/envioTerminacion.js"></script>
        <script src="./js/navegacion.js"></script>