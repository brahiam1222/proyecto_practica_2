<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ url('/') }}/img/icono.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Agroesco</span>
    </a>

    <!-- Sidebar -->
    <div
        class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
        </div>
        <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
        </div>
        <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 320px;"></div>
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                    <!-- Sidebar user (optional) -->
                    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Brahiam</a>
                        </div>
                    </div> --}}

                    <!-- SidebarSearch Form -->
                    {{-- <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                        <div class="sidebar-search-results">
                            <div class="list-group"><a href="#" class="list-group-item">
                                    <div class="search-title"><strong class="text-light"></strong>N<strong
                                            class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                            class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                            class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                            class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                            class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                            class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                            class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                            class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                            class="text-light"></strong></div>
                                    <div class="search-path"></div>
                                </a></div>
                        </div>
                    </div> --}}

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Añadir botones o iconos con .nav-icon class
                                 con font-awesome o cualquier otro ícono de la librería -->
             
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/")}}">
                                  <i class="nav-icon fa fa-bar-chart"></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/tabla")}}">
                                  <i class="nav-icon fa fa-bar-chart"></i>
                                    Tabla de Datos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url("/fincas")}}">
                                  <i class="nav-icon fa fa-bar-chart"></i>
                                    Gráficas
                                </a>
                            </li>

                            <li class="nav-item bordear">
                              <a class="nav-link" href="{{ url("/regTerminacion") }}">
                                <i class="nav-icon fa fa-pencil-square-o"></i>
                                Terminacion
                              </a>
                            </li>
                            {{-- <li class="nav-item bordear">
                              <a class="nav-link" href="{{ url('/lluvias') }}">
                                <i class="nav-icon fa fa-tint"></i>
                                Precipitaciones
                              </a>
                            </li>
                            <li class="nav-item bordear">
                              <a class="nav-link" href="{{ url('/defectos') }}">
                                <i class="nav-icon fa fa-file-text"></i>
                                Defectos
                              </a>
                            </li>
                            <li class="nav-item bordear">
                              <a class="nav-link" href="{{ url('/tapas') }}">
                                <i class="nav-icon fa fa-file-text"></i>
                                Codigo de Tapas
                              </a>
                            </li>

                            <li class="nav-item bordear">
                              <a class="nav-link" target="_blank" href="{{substr(url('/'),0,-11)}}">
                                <i class="nav-icon fas fa-globe"></i>
                                Ver sitio
                              </a>
                            </li> --}}
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
                <div class="os-scrollbar-handle" style="height: 20.075%; transform: translate(0px);"></div>
            </div>
        </div>
        <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
</aside>
