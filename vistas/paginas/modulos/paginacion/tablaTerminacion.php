

<?php include "./vistas/paginas/modulos/contenido-cuerpo.php" ?>



<div id="tablaterminacion" class="container-fluid">
          <div class="col-md-7 col-lg-8">

            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Terminaciones</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <form id="generaTabla">

                        <label for="exampleFormControlSelect1"> Seleccione el día del embarque</label>
                        <input type="date" class="form-control" id="fechaTabla">
                        <label for="terminacionesFincas">Fincas</label>
                        <select class="form-control mb-3" id="terminacionesFincas">

                          <?php $datosTerminacion = ControladorFormulario::ctrMostrarTerminacion("fincas", null, null)    ?>
                          <option>Seleccione una Finca</option>

                          <?php foreach ($datosTerminacion as $selectFincas) { ?>
                            <option value="<?php echo $selectFincas["id_fincas"];  ?>"><?php echo $selectFincas["nombre"];  ?></option>
                          <?php } ?>

                        </select>
                      </form>

                      <!-- boton para actualizar -->
                      <button type="button" class="btn btn-primary" id="actualizaTabla">Actualizar</button>


                      <div class="container">

                        <!-- mostrar las terminaciones registradas en la base de datos -->
                        <!-- script para que se refresque la tabla -->
                        <!-- Evento que inicie auto la busqueda de las terminaciones por fecha y finca  -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="table-responsive">
                              <table id="tablaTerminaciones" class="table table-striped table-bordered table-condensed table-hover">
                                <thead class="text-center">
                                  <tr id="">
                                    <th>Fecha</th>
                                    <th>Finca</th>
                                    <th>Cantidad</th>
                                    <th>Editar</th>
                                    <th>Borrar</th>
                                  </tr>
                                </thead>
                                <tbody class="text-center">
                                  <?php
                                  // var_dump($_POST);
                                  // if(isset($_POST["fechaTabla"])){
                                  // $fincaSeleccionada = $_POST["valorFinca"];
                                  // $fechaSeleccionada = $_POST["valorFinca"];
                                  //  if(isset($_GET["fechaS"]) && isset($_GET["fincaS"])){
                                  //   $fincaSeleccionada = $_GET["fincaS"];
                                  //   $fechaSeleccionada = $_GET["fechaS"];
                                  // var_dump($fincaSeleccionada);
                                  // $datosTerminacion = ControladorFormulario::ctrMostrarTerTabla("terminacion", "0000-00-00","1" );


                                  // $datosTerminacion = ControladorFormulario::ctrMostrarTerTabla("terminacion", $valorFecha, $valorFinca);
                                  // $fincas = $_POST['fincaSeleccionada']; 

                                  $datosTerminacion = ControladorFormulario::ctrMostrarTerTabla("terminacion");
                                  // $idTerminacion = ControladorFormulario::ctrMostrarTerminacion("terminacion")    
                                  // $datosFruta = ControladorFormulario::ctrTraerFruta("tapas")

                                  //enviar el cod de fruta encontrada por el controlador para que se muestre en el select
                                  ?>
                                  <?php foreach ($datosTerminacion as $terminacion) { ?>
                                    <tr>
                                      <td><?php echo $terminacion["fecha"];  ?></td>
                                      <td><?php echo $terminacion["nombre"];  ?></td>
                                      <td><?php for ($i = 0; $i < count(json_decode($terminacion["fruta"])); $i++) { ?>
                                          <!-- echo "&#x1F4A5;"; -->
                                        <?php echo json_decode($terminacion["fruta"])[$i]->Fruta;
                                          } ?>

                                      </td>
                                      </td>



                                      <!-- ya que este modelo me trae toda la terminación que coincida con la fecha y la finca, puedo implementar
                                            un botón que me redireccione a otra página con estos datos, donde se lleve a cabo la actualización(Update), para luego terminada me 
                                            regrese a esta página inicial -->



                                      <!-- No me guarda en la BD de la Página -->


                                      <td>
                                        <a href="index.php?pagina=contenido-editar&id=<?php echo $terminacion["id"] ?>" class="btn btn-warning btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>

                                      </td>

                                      <td>
                                        <a href="index.php?pagina=contenido-borrar&id=<?php echo $terminacion["id"] ?>" class="btn btn-danger btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                      </td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>


                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="./js/traerInformacion.js"></script>
        <!-- <script src="./js/navegacion.js"></script> -->