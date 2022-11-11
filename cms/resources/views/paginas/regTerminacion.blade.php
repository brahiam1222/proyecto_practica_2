@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height: 264.4px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Informacion de Embarque</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            {{-- <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li> --}}
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Terminacion</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button> --}}
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('regTerminacion.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="row col-lg-6">
                                            <div class="card col-lg-6">
                                                <div class="card-body col-lg-12">
                                                    <label for="Fecha">Fecha</label>
                                                    <input class="form-control" type="date" name="fecha" id="Fecha"
                                                        value="">
                                                </div>
                                            </div>


                                            <div class="card col-lg-6">
                                                <div class="card-body col-lg-12">
                                                    <label for="fincas">Fincas</label>
                                                    <select class="form-control" name="Fincas" id="Fincas">
                                                        @foreach ($Fincas as $item)
                                                            <option value="{{ $item['id_fincas'] }}">{{ $item['nombre'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="arecorrida" class="form-label">Area Recorrida</label>
                                                        <input type="text" class="form-control" name="arecorrida"
                                                            id="arecorrida">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="cjsestimadas" class="form-label">Cajas Estimadas</label>
                                                        <input type="text" class="form-control" name="cjsestimadas"
                                                            id="cjsestimadas">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="pempacadora" class="form-label">Persona
                                                            Empacadora</label>
                                                        <input type="text" class="form-control" name="pempacadora"
                                                            id="pempacadora">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-6">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="pcampo" class="form-label">Persona Campo</label>
                                                        <input type="text" class="form-control" name="pcampo"
                                                            id="pcampo">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-6">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="calibre" class="form-label">Calibre 2da Mano</label>
                                                        <input type="text" class="form-control" name="calibre"
                                                            id="calibre">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="defecto1" class="form-label">Defecto 1</label>
                                                        <select class="form-control" name="defectosLista1"
                                                            id="defectosLista1">
                                                            <option value="null" selected>Seleccione una</option>
                                                            @foreach ($Defectos as $element => $key)
                                                                <option value="{{ $key['codigo'] }}">{{ $key['nombre'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="text" class="form-control" name="defecto1"
                                                            id="defecto1">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="defecto2" class="form-label">Defecto 2</label>
                                                        <select class="form-control" name="defectosLista2"
                                                            id="defectosLista2">
                                                            <option value="null" selected>Seleccione una</option>
                                                            @foreach ($Defectos as $element => $key)
                                                                <option value="{{ $key['codigo'] }}">{{ $key['nombre'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="text" class="form-control" name="defecto2"
                                                            id="defecto2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="defecto3" class="form-label">Defecto 3</label>
                                                        <select class="form-control" name="defectosLista3"
                                                            id="defectosLista3">
                                                            <option value="null" selected>Seleccione una</option>
                                                            @foreach ($Defectos as $element => $key)
                                                                <option value="{{ $key['codigo'] }}">{{ $key['nombre'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="text" class="form-control" name="defecto3"
                                                            id="defecto3">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="cjsnal" class="form-label">Cajas Nacional</label>
                                                        <input type="text" class="form-control" name="cjsnal"
                                                            id="cjsnal">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="blsnacional" class="form-label">Bolsas
                                                            Nacional</label>
                                                        <input type="text" class="form-control" name="blsnacional"
                                                            id="blsnacional">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="klsnacional" class="form-label">Kilos Nacional</label>
                                                        <input type="text" class="form-control" name="klsnacional"
                                                            id="klsnacional">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="klspersonal" class="form-label">Kilos Personal</label>
                                                        <input type="text" class="form-control" name="klspersonal"
                                                            id="klspersonal">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-4">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="klsfrpiso" class="form-label">Kilos Fruta Piso</label>
                                                        <input type="text" class="form-control" name="klsfrpiso"
                                                            id="klsfrpiso">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Tabla, añadir funciones y nombres --}}

                                        <div class="table-responsive-sm col-lg-6">
                                            <table id="tabla-extend"
                                                class="table table-striped-columns
                                            table-hover	
                                            table-borderless
                                            table-primary
                                            align-middle
                                            table-sm">
                                                <thead class="table-light">
                                                    <caption></caption>
                                                    <tr>
                                                        {{-- <th>#</th> --}}
                                                        <th>Tapa</th>
                                                        <th>Cantidad</th>
                                                        <th>Rechazo</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    <tr class="table-primary">
                                                        {{-- <td scope="row">Item</td> --}}
                                                        <td>
                                                            <div class="mb-3">
                                                                <select class="form-select form-control form-select-sm"
                                                                    name="tapasValor1" id="tapasValor1">
                                                                    <option value="null" selected>Seleccione una</option>
                                                                    @foreach ($Tapas as $item)
                                                                        <option value="{{ $item['cod'] }}">
                                                                            {{ $item['descripcion'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control-sm" type="text" name="cjs1"
                                                                id="cjs1"></td>
                                                        <td><input class="form-control-sm" type="text"
                                                                name="cjsRechazadas1" id="cjsRechazadas1"></td>

                                                    </tr>

                                                </tbody>
                                                <tbody class="table-group-divider">
                                                    <tr class="table-primary">
                                                        {{-- <td scope="row">Item</td> --}}
                                                        <td>
                                                            <div class="mb-3">
                                                                <select class="form-select form-control form-select-sm"
                                                                    name="tapasValor2" id="tapasValor2">
                                                                    <option value="null" selected>Seleccione una</option>
                                                                    @foreach ($Tapas as $item)
                                                                        <option value="{{ $item['cod'] }}">
                                                                            {{ $item['descripcion'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control-sm" type="text" name="cjs2"
                                                                id="cjs2"></td>
                                                        <td><input class="form-control-sm" type="text"
                                                                name="cjsRechazadas2" id="cjsRechazadas2"></td>

                                                    </tr>

                                                </tbody>
                                                <tbody class="table-group-divider">
                                                    <tr class="table-primary">
                                                        {{-- <td scope="row">Item</td> --}}
                                                        <td>
                                                            <div class="mb-3">
                                                                <select class="form-select form-control form-select-sm"
                                                                    name="tapasValor3" id="tapasValor3">
                                                                    <option value="null" selected>Seleccione una</option>
                                                                    @foreach ($Tapas as $item)
                                                                        <option value="{{ $item['cod'] }}">
                                                                            {{ $item['descripcion'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control-sm" type="text" name="cjs3"
                                                                id="cjs3"></td>
                                                        <td><input class="form-control-sm" type="text"
                                                                name="cjsRechazadas3" id="cjsRechazadas3"></td>

                                                    </tr>

                                                </tbody>
                                                <tbody class="table-group-divider">
                                                    <tr class="table-primary">
                                                        {{-- <td scope="row">Item</td> --}}
                                                        <td>
                                                            <div class="mb-3">
                                                                <select class="form-select form-control form-select-sm"
                                                                    name="tapasValor4" id="tapasValor4">
                                                                    <option value="null" selected>Seleccione una</option>
                                                                    @foreach ($Tapas as $item)
                                                                        <option value="{{ $item['cod'] }}">
                                                                            {{ $item['descripcion'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control-sm" type="text" name="cjs4"
                                                                id="cjs4"></td>
                                                        <td><input class="form-control-sm" type="text"
                                                                name="cjsRechazadas4" id="cjsRechazadas4"></td>

                                                    </tr>

                                                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                            {{-- <input type="button" class="btn btn-success btn-group-lg" id="button-agregar" value="+" onclick="insertaFila()">
                                            <input type="button" class="btn btn-warning btn-group-lg" id="button-eliminar" value="-" onclick="eliminaFila()"> --}}

                                            <div class="row col-lg-6">
                                                <div class="col-lg-6">
                                                    <div data-toggle="modal" data-target="#modelracimos"
                                                        class="card btnpersonal">
                                                        <div class="card-body col-lg-12">
                                                            <a data-toggle="modal" data-target="#modelracimos">modelo
                                                                racimos</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-6">
                                                    <div data-toggle="modal" data-target="#modelrepicados"
                                                        class="card btnpersonal">
                                                        <div class="card-body col-lg-12">
                                                            <a data-toggle="modal" data-target="#modelrepicados">modelo
                                                                repiques</a>

                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id="enviarterminacion"
                                            value="Guardar Terminacion">
                                    </div>
                                    <div class="card-body">

                                        <ul>

                                        </ul>

                                    </div>



                                    {{-- Vista modelo racimos --}}
                                    <div class="modal fade" id="modelracimos" role="dialog"
                                        style="z-index: 1050; display: none;" aria-hidden="true">

                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Racimos Cortados</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </div>
                                                <form id="regisRacimos" action="" method="post">
                                                    <!--formulario registro terminación-->
                                                    @csrf
                                                    <div class="modal-body row" style="height: 87vh;overflow-y:auto;">
                                                        <div class="col-lg-5 row">
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo 5
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm5" name="sm5"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 5 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo 6
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm6" name="sm6"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 6 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo 7
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm7" name="sm7"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 7 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo 8
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm8" name="sm8"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 8 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo 9
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm9" name="sm9"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 9 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo
                                                                    10
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm10" name="sm10"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 10 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo
                                                                    11
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm11" name="sm11"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 11 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo
                                                                    12
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm12" name="sm12"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 12 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo
                                                                    13
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="sm13" name="sm13"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimo de 13 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Racimo
                                                                    rechazo
                                                                </label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="rechazo" name="rechazo"
                                                                        class="form-control racimos"
                                                                        placeholder="ingrese racimos rechazados">
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 row">
                                                        </div>

                                                        <div class="col-lg-5 row">

                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    5
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm5" name="Rsm5"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 5 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    6
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm6" name="Rsm6"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 6 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    7
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm7" name="Rsm7"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 7 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    8
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm8" name="Rsm8"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 8 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    9
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm9" name="Rsm9"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 9 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    10
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm10" name="Rsm10"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 10 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    11
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm11" name="Rsm11"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 11 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    12
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm12" name="Rsm12"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 12 semanas">
                                                                </div>


                                                            </div>
                                                            <div class="form-group row">
                                                                <label for=""
                                                                    class="col-sm-3 col-form-label">Repique
                                                                    13
                                                                    semanas</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="Rsm13" name="Rsm13"
                                                                        class="form-control repiques"
                                                                        placeholder="ingrese Repique de 13 semanas">
                                                                </div>


                                                            </div>


                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                        {{-- Vista modelo repiques --}}

                                    </div>
                                    {{-- <div class="modal fade" id="modelrepicados" role="dialog"
                                        style="z-index: 1050; display: none;" aria-hidden="true">

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Racimos Repicados</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </div>
                                                <form id="regisrepiques" action="" method="post">
                                                    <!--formulario registro terminación-->
                                                    @csrf
                                                    <div class="modal-body" style="height: 87vh;overflow-y:auto;">

                                                    </div>

                                                </form>

                                            </div>

                                        </div> 

                                    </div> --}}
                                    {{-- Vista modelo repiques --}}
                                    <!-- /.card-body -->



                                </form>

                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Embolse</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button> --}}
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('embolse.store') }}" method="POST">

                                    @csrf


                                    <div class="table-responsive-sm col-lg-6">

                                        <div class="card" style="width:30%">

                                            <div class="row">
                                                
                                            <div class="col-6 row">
                                                <select type="text" class="form-select form-control form-select-sm col-12" 
                                                style="width:70px" name="fechaEmb"
                                                id="fechaEmb">

                                                    <option value="null">Año</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>

                                                </select>
                                            </div>
                                            <div class="col-6 row">
                                                <input type="text" class="form-control col-12 " 
                                                style="width:100px" type="text"
                                                name="semanaEmb"
                                                id="semanaEmb" placeholder="Semana">
                                            </div>
                                        </div>
                                        
                                    </div>


                                        <table id="tabla-extend"
                                            class="table table-striped-columns
                                                table-hover	
                                                table-borderless
                                                table-primary
                                                align-middle
                                                table-sm">
                                            <thead class="table-light">
                                                <caption></caption>
                                                <tr>

                                                    
                                                    <th>Destino</th>
                                                    <th>Color</th>
                                                    <th>Finca</th>
                                                    {{-- <th>Lotes</th> --}}
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @for ($i = 0; $i < count($Fincas); $i++)
                                                    <tr class="table-primary">

                                                        <td><input class="form-control form-control-sm"
                                                                style="width:100px" type="text" name="destinoEmb"
                                                                value="Exportacion" disabled
                                                                id="destinoEmb{{ $i }}"></td>
                                                        <td><select class="form-select form-control form-select-sm "
                                                                style="width:100px" name="colorEmb{{ $i }}"
                                                                id="colorEmb{{ $i }}">
                                                                <option value="null">Elija</option>
                                                                <option value="RO">Rojo</option>
                                                                <option value="CA">Café</option>
                                                                <option value="NE">Negro</option>
                                                                <option value="NA">Naranja</option>
                                                                <option value="VE">Verde</option>
                                                                <option value="AM">Amarillo</option>
                                                                <option value="BL">Blanca</option>
                                                                <option value="AZ">Azul</option>
                                                                <option value="HB">Hábano</option>
                                                                <option value="MR">Morado</option>
                                                                <option value="GR">Gris</option>
                                                            </select>
                                                        <td>
                                                            <div class="mb-3">
                                                                <select class="form-select form-control form-select-sm "
                                                                    style="width:150px"
                                                                    name="fincasEmb{{ $i }}"
                                                                    id="fincasEmb{{ $i }}">
                                                                    <option value="null" selected>Seleccione una
                                                                    </option>
                                                                    @foreach ($Fincas as $item)
                                                                        <option value="{{ $item['id_fincas'] }}">
                                                                            {{ $item['nombre'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td><input class="form-control form-control-sm"
                                                                style="width:100px" type="text"
                                                                name="totalEmb{{ $i }}"
                                                                id="totalEmb{{ $i }}"></td>




                                                    </tr>
                                                @endfor

                                            </tbody>

                                            <tfoot>

                                            </tfoot>
                                        </table>



                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id=""
                                            value="Guardar Embolse">
                                    </div>
                                </form>


                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Precipitacion</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button> --}}
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('lluvias.store') }}" method="POST">

                                    @csrf


                                    <div class="table-responsive-sm col-lg-4">
                                        <table id="tabla-extend"
                                            class="table table-striped-columns
                                                table-hover	
                                                table-borderless
                                                table-primary
                                                align-middle
                                                table-sm">
                                            <thead class="table-light">
                                                <caption></caption>
                                                <tr>


                                                    <th>Fecha</th>
                                                    <th>Finca</th>
                                                    <th>Milimetros</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @for ($i = 0; $i < count($Fincas); $i++)
                                                    <tr class="table-primary">
                                                        <td><input class="form-control" type="date"
                                                                name="fechaMm{{ $i }}"
                                                                id="fechaMm{{ $i }}" value="">
                                                        </td>

                                                        <td>
                                                            <div class="mb-3">
                                                                <select class="form-select form-control form-select-sm "
                                                                    style="width:150px"
                                                                    name="fincasMm{{ $i }}"
                                                                    id="fincasMm{{ $i }}">
                                                                    <option value="null" selected>Seleccione una
                                                                    </option>
                                                                    @foreach ($Fincas as $item)
                                                                        <option value="{{ $item['id_fincas'] }}">
                                                                            {{ $item['nombre'] }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td><input class="form-control form-control-sm"
                                                                style="width:80px; font-size:130%" type="text"
                                                                name="mm{{ $i }}" id="mm{{ $i }}">
                                                        </td>




                                                    </tr>
                                                @endfor

                                            </tbody>

                                            <tfoot>

                                            </tfoot>
                                        </table>



                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id=""
                                            value="Guardar Lluvia">
                                    </div>
                                </form>


                            </div>
                        </div>
                        {{-- <div class="card-footer">
                            Footer
                        </div> --}}
                        <!-- /.card-footer-->
                        <!-- /.card -->

                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
