<body>
  <!-- 

if (!isset($_SESSION["validar"])) {

  echo '<script> window.location = "index.php";</script>';
  return;
} else {
  if ($_SESSION["validar"] != "ok") {
    echo '<script> window.location = "plantilla.php";</script>';
    return;
  }
}

-->

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" onclick="show('Consolidado')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Consolidado
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="show('Terminacion')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true">
                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                  <polyline points="13 2 13 9 20 9"></polyline>
                </svg>
                Registrar Terminacion
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="show('Lluvia')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom" aria-hidden="true">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                Lluvia
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="show('tablaterminacion')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom" aria-hidden="true">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path></path>
                </svg>
                Terminaciones
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom" aria-hidden="true">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                </svg>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers align-text-bottom" aria-hidden="true">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
                Integrations
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
              </svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="chartjs-size-monitor">
          <div class="chartjs-size-monitor-expand">
            <div class=""></div>
          </div>
          <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"></h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              This week
            </button>
          </div>
        </div>

        <!-- <div id="Consolidado" class="container-fluid">
          <iframe title="Informe Consolidado de Producción - CNS_MANANTIALES" width="1060" height="700" src="https://app.powerbi.com/view?r=eyJrIjoiMGE4MTY2NTctYzFmNC00ZWUxLWExNDQtNDEzNjRjZDMwMDgwIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>

        </div>

        <div id="Lluvia" class="container-fluid">
          <iframe title="Informe Precipitacion  y Sigatoka - Lluvia" width="1060" height="750" src="https://app.powerbi.com/view?r=eyJrIjoiNDEyOTYyN2ItYjU3Yi00ZjViLTg4ODgtMzQ5NWRiMzE0ZTNiIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>

        </div> -->

        <!-- Display de la tabla terminaciones y el cambio de text a int en la tabla fincas de la BD -->

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

                          <?php $datosTerminacion = ControladorFormulario::ctrMostrarTerminacion("fincas")    ?>
                          <option>Seleccione una Finca</option>

                          <?php foreach ($datosTerminacion as $selectFincas) { ?>
                            <option value="<?php echo $selectFincas["id"];  ?>"><?php echo $selectFincas["nombre"];  ?></option>
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
                                  <tr>
                                    <th>Fecha</th>
                                    <th>Finca</th>
                                    <th>Cantidad</th>
                                    <th>Acciones</th>
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
                                  $datosFruta = ControladorFormulario::ctrTraerFruta("tapas")

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
                                        <a href="<?php echo $terminacion["id"];  ?>" class="btn btn-danger btn-sm btn-delete"><i class="fas fa-trash-alt"></i></a>
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

                  <?php $datosTerminacion = ControladorFormulario::ctrMostrarTerminacion("fincas")    ?>
                  <?php foreach ($datosTerminacion as $selectFincas) { ?>
                    <option value="<?php echo $selectFincas["id"];  ?>"><?php echo $selectFincas["nombre"];  ?></option>
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


                            <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos"); ?>
                            <option>Seleccione el Defecto</option>

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


                            <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos"); ?>
                            <option>Seleccione el Defecto</option>

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


                            <?php $datosDefecto = ControladorFormulario::ctrMostrarTerminacion("defectos"); ?>
                            <option>Seleccione el Defecto</option>

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
                              <tr>
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
                                    <option>Seleccione una Fruta</option>

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