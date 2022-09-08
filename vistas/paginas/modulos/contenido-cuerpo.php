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
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-lightNew sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav rediseño flex-column">
            <li class="nav-item bordear bordear">
              <a class="nav-link active" id="rediseñoBarra" aria-current="page" href="index.php?pagina=contenido-cuerpo/consolidado">
                
              <img id="iconos" src="./img/Consolidado.png">
              
              <!-- <svg class="" xmlns="expand.svg" viewBox="0 0 100 100"></svg> -->
                <!-- <i id="iconosBarra" class="fa-regular fa-file-lines"></i> -->
                Informe Consolidado Anual
              </a>
            </li>
            <li class="nav-item bordear">
              <a class="nav-link" id="rediseñoBarra" href="index.php?pagina=contenido-cuerpo/terminacionNew">
                
              <img id="iconos" src="./img/registrarTerminacion.png">
                Registrar Terminacion
              </a>
            </li>
            <li class="nav-item bordear">
              <a class="nav-link" href="index.php?pagina=contenido-cuerpo/lluvia" id="rediseñoBarra">
              <img id="iconos" src="./img/precipitacion.png">
                Reporte de Precipitaciones
              </a>
            </li>
            <li class="nav-item bordear">
              <a class="nav-link" href="index.php?pagina=contenido-cuerpo/tablaTerminacion" id="rediseñoBarra" >
              <img id="iconos" src="./img/tabla.png">
              <!-- <i id="iconosBarra" class="fa-regular fa-hand-spock"></i> -->
                Tabla Terminaciones
              </a>
            </li>
            <li class="nav-item bordear">
              <a class="nav-link" id="rediseñoBarra" href="#">
                
              <!-- <i id="iconosBarra" class="fa-regular fa-hand-spock"></i> -->
                Reports
              </a>
            </li>
            <li class="nav-item bordear">
              <a class="nav-link" id="rediseñoBarra" href="#">
                
              <!-- <i id="iconosBarra" class="fa-regular fa-hand-spock"></i> -->
                Integrations
              </a>
            </li>
          </ul>

          <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" id="rediseñoBarra" href="#" aria-label="Add a new report">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
              </svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" id="rediseñoBarra" href="#">
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
              <a class="nav-link" id="rediseñoBarra" href="#">
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
              <a class="nav-link" id="rediseñoBarra" href="#">
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
              <a class="nav-link" id="rediseñoBarra" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Year-end sale
              </a>
            </li> -->
          <!-- </ul> -->
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

        

        

        <!-- <script src="./js/traerInformacion.js"></script> -->
        <script src="js/scriptBuscar.js"></script>
        <!-- <script src="./js/envioTerminacion.js"></script> -->