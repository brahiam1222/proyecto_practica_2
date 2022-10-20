@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height: 264.4px;">

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
            </div>
        </section>


        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

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

                                                <th>Año</th>
                                                <th>Semana</th>
                                                <th>Destino</th>
                                                <th>Color</th>
                                                <th>Finca</th>
                                                {{-- <th>Lotes</th> --}}
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @for ($i = 0; $i < count($fincas); $i++)
                                                <tr class="table-primary">
                                                    <td><input class="form-control form-control-sm" style="width:50px"
                                                            type="text" name="año" id="año"></td>

                                                    <td><input class="form-control form-control-sm" style="width:100px"
                                                            type="text" name="semana" id="semana"></td>

                                                    <td><input class="form-control form-control-sm" style="width:100px"
                                                            type="text" name="año" value="Exportacion" disabled id="año"></td>
                                                    <td><select class="form-select form-control form-select-sm "
                                                            style="width:100px" name="" id="">
                                                            <option value="null">Elija</option>
                                                            <option value="Rojo">Rojo</option>
                                                            <option value="Cafe">Cafe</option>
                                                            <option value="Azul">Azul</option>
                                                            <option value="Amarillo">Amarillo</option>
                                                            <option value="Naranja">Naranja</option>
                                                        </select>
                                                    <td>
                                                        <div class="mb-3">
                                                            <select class="form-select form-control form-select-sm "
                                                                style="width:150px" name="fincasValor1" id="fincasValor1">
                                                                <option value="null" selected>Seleccione una</option>
                                                                @foreach ($fincas as $item)
                                                                    <option value="{{ $item['id_fincas'] }}">
                                                                        {{ $item['nombre'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td><input class="form-control form-control-sm" style="width:100px"
                                                            type="text" name="año" id="año"></td>

                                                    {{-- {{count($fincas)}} --}}

                                                    {{-- <td>
                                                    <div class="col-lg-12">
                                                        <div data-toggle="modal" data-target="#modelracimos"
                                                            class="card btnpersonal">
                                                            <div class="card-body col-lg-12">
                                                                <a data-toggle="modal" data-target="#modelracimos"></a>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </td> --}}


                                                </tr>
                                            @endfor

                                        </tbody>

                                        <tfoot>

                                        </tfoot>
                                    </table>



                                </div>
                                

                            </div>
                            {{-- <div class="modal fade" id="modelracimos" role="dialog"
                                        style="z-index: 1050; display: none;" aria-hidden="true">

                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Embolse de la semana</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </div>
                                                <form id="regisRacimos" action="" method="post">
                                                    <!--formulario registro terminación-->
                                                    @csrf
                                                    <div class="modal-body row" style="height: 80vh;overflow-y:auto;">
                                                        <div class="col-lg-12 row">
                                                            <div class="form-group row">
                                                                <label for="lt1"
                                                                    class="col-lg col-sm-3 col-form-label">Lt 1</label>
                                                                <div class="col sm-3">
                                                                    <input type="text" id="lt1" name="lt1"
                                                                        class="form-control" style="width:70px"
                                                                        placeholder="cantidad">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                              <label for="lt1"
                                                                  class="col-lg col-sm-3 col-form-label">Lt 2</label>
                                                              <div class="col sm-3">
                                                                  <input type="text" id="lt1" name="lt1"
                                                                      class="form-control" style="width:70px"
                                                                      placeholder="cantidad">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                            <label for="lt1"
                                                                class="col-lg col-sm-3 col-form-label">Lt 3</label>
                                                            <div class="col sm-3">
                                                                <input type="text" id="lt1" name="lt1"
                                                                    class="form-control" style="width:70px"
                                                                    placeholder="cantidad">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                          <label for="lt1"
                                                              class="col-lg col-sm-3 col-form-label">Lt 4</label>
                                                          <div class="col sm-3">
                                                              <input type="text" id="lt1" name="lt1"
                                                                  class="form-control" style="width:70px"
                                                                  placeholder="cantidad">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                        <label for="lt1"
                                                            class="col-lg col-sm-3 col-form-label">Lt 5</label>
                                                        <div class="col sm-3">
                                                            <input type="text" id="lt1" name="lt1"
                                                                class="form-control" style="width:70px"
                                                                placeholder="cantidad">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label for="lt1"
                                                          class="col-lg col-sm-3 col-form-label">Lt 6</label>
                                                      <div class="col sm-3">
                                                          <input type="text" id="lt1" name="lt1"
                                                              class="form-control" style="width:70px"
                                                              placeholder="cantidad">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                    <label for="lt1"
                                                        class="col-lg col-sm-3 col-form-label">Lt 7</label>
                                                    <div class="col sm-3">
                                                        <input type="text" id="lt1" name="lt1"
                                                            class="form-control" style="width:70px"
                                                            placeholder="cantidad">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                  <label for="lt1"
                                                      class="col-lg col-sm-3 col-form-label">Lt 8</label>
                                                  <div class="col sm-3">
                                                      <input type="text" id="lt1" name="lt1"
                                                          class="form-control" style="width:70px"
                                                          placeholder="cantidad">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                <label for="lt1"
                                                    class="col-lg col-sm-3 col-form-label">Lt 9</label>
                                                <div class="col sm-3">
                                                    <input type="text" id="lt1" name="lt1"
                                                        class="form-control" style="width:70px"
                                                        placeholder="cantidad">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="lt1"
                                                  class="col-lg col-sm-3 col-form-label">Lt 10</label>
                                              <div class="col sm-3">
                                                  <input type="text" id="lt1" name="lt1"
                                                      class="form-control" style="width:70px"
                                                      placeholder="cantidad">
                                              </div>
                                          </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                </form>

                                            </div>

                                        </div> --}}
                            {{-- Vista modelo repiques --}}
                            

                        </div>

                        <div class="card-footer">
                            Footer
                        </div>

                    </div>

                </div>
            </div>
    </div>
    </section>

    </div>
@endsection
