@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height: 264.4px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tabla</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Title</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('tabla.store') }}" method="post">
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
                                                        <option value="1">Manantiales</option>
                                                        <option value="2">Madelandia</option>
                                                        <option value="3">Santa_Helena</option>
                                                        <option value="4">Corrales</option>
                                                        <option value="5">Galilea</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-lg-2">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="arecorrida" class="form-label">Area Recorrida</label>
                                                        <input type="text" class="form-control" name="arecorrida"
                                                            id="arecorrida">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-2">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="cjsestimadas" class="form-label">Cajas Estimadas</label>
                                                        <input type="text" class="form-control" name="cjsestimadas"
                                                            id="cjsestimadas">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-2">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="pempacadora" class="form-label">Persona
                                                            Empacadora</label>
                                                        <input type="text" class="form-control" name="pempacadora"
                                                            id="pempacadora">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-2">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="pcampo" class="form-label">Persona Campo</label>
                                                        <input type="text" class="form-control" name="pcampo"
                                                            id="pcampo">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-2">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <label for="calibre" class="form-label">Calibre 2da Mano</label>
                                                        <input type="text" class="form-control" name="calibre"
                                                            id="calibre">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        
                                        <div class="row col-lg-6">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <a data-toggle="modal" data-target="#modelracimos">modelo
                                                            racimos</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body col-lg-12">
                                                        <a data-toggle="modal" data-target="#modelrepicados">modelo
                                                            repiques</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id="enviarterminacion" value="Guardar">
                                    </div>
                                    <div class="card-body">

                                        <ul>

                                        </ul>

                                    </div>



                                    {{-- Vista modelo racimos --}}
                                    <div class="modal fade" id="modelracimos" role="dialog"
                                        style="z-index: 1050; display: none;" aria-hidden="true">

                                        <div class="modal-dialog" role="document">
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
                                                    <div class="modal-body" style="height: 87vh;overflow-y:auto;">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo 5
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm5" name="sm5"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 5 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo 6
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm6" name="sm6"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 6 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo 7
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm7" name="sm7"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 7 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo 8
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm8" name="sm8"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 8 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo 9
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm9" name="sm9"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 9 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo
                                                                10
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm10" name="sm10"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 10 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo
                                                                11
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm11" name="sm11"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 11 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo
                                                                12
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm12" name="sm12"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 12 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo
                                                                13
                                                                semanas</label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="sm13" name="sm13"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimo de 13 semanas">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-3 col-form-label">Racimo
                                                                rechazo
                                                            </label>
                                                            <div class="col sm-9">
                                                                <input type="text" id="rechazo" name="rechazo"
                                                                    class="form-control racimos"
                                                                    placeholder="ingrese racimos rechazados">
                                                            </div>


                                                        </div>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                    {{-- Vista modelo racimos --}}
                                                                        <!-- /.card-body -->
                                    <div class="card-footer">
                                        Footer
                                    </div>
                                    <!-- /.card-footer-->
                                </form>

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
