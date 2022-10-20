@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height: 264.4px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fincas</h1>
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
                              
                              
                              {{-- <div class="table-responsive-sm col-lg-12" style="font-size: 11px ">
                                  <div style="overflow-x:scroll">
                                    <table id="tabla-extend inputsm"
                                        class="table table-striped-columns
                                                table-hover
                                                table-primary
                                                align-middle
                                                ">
                                        <thead class="table-light">
                                            <caption></caption>
                                            <tr>
                                                <th>Lotes</th>
                                                <th>1 sm</th>
                                                <th>2 sm</th>
                                                <th>3 sm</th>
                                                <th>4 sm</th>
                                                <th>5 sm</th>
                                                <th>6 sm</th>
                                                <th>7 sm</th>
                                                <th>8 sm</th>
                                                <th>9 sm</th>
                                                <th>10 sm</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr class="table-primary">
                                                <td>
                                                    <label for="Lt1">Lt1 </label>
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjs1"
                                                        id="cjs1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>
                                                <td>
                                                    <input class="form-control-sm" type="text" name="cjsRechazadas1"
                                                        id="cjsRechazadas1">
                                                </td>

                                            </tr>

                                        </tbody>

                                        <tfoot>

                                        </tfoot>
                                    </table>

                                </div>
                              </div>
                            </div> --}}

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
@endsection
