@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height: 264.4px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Registrar Terminacion</h1>
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
                                <div class="table-responsive-sm col-lg-12">
                                    <table id="tabla-extend"
                                        class="table table-striped-columns
                                            table-hover	
                                            table-dark
                                            align-middle">
                                        <thead class="table-light">
                                            <caption>Terminaciones registradas</caption>
                                            <tr>
                                                {{-- <th>#</th> --}}
                                                <th>Fecha</th>
                                                <th>Fincas</th>
                                                <th>Tapas</th>
                                                <th>Cantidad</th>
                                                <th>Editar</th>
                                                <th>Borrar</th>
                                            </tr>
                                        </thead>
                                        @foreach ($Tabla as $item => $key)
                                            <form action="{{url('/')}}/editar/{{$key->id}}" method="post">

                                                @method('PUT')
                                                @csrf
                                                <tbody class="table-group-divider">
                                                    <tr class="table-primary" style="background-color: #0000; color:black">
                                                        {{-- <td scope="row">Item</td> --}}
                                                        <td>
                                                            <div class="mb-2">

                                                                {{ $key['fecha'] }}

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-2">

                                                                {{ $key->equal_Fincas['nombre'] }}

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-3">

                                                                @if (json_decode($key['fruta'])->Fruta1 != '0' &&
                                                                    json_decode($key['fruta'])->Fruta1 != '' &&
                                                                    json_decode($key['fruta'])->Fruta1 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta1 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ $tapa['descripcion'] }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if (json_decode($key['fruta'])->Fruta2 != '0' &&
                                                                    json_decode($key['fruta'])->Fruta2 != '' &&
                                                                    json_decode($key['fruta'])->Fruta2 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta2 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ $tapa['descripcion'] }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if (json_decode($key['fruta'])->Fruta3 != '0' &&
                                                                    json_decode($key['fruta'])->Fruta3 != '' &&
                                                                    json_decode($key['fruta'])->Fruta3 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta3 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ $tapa['descripcion'] }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if (json_decode($key['fruta'])->Fruta4 != '0' &&
                                                                    json_decode($key['fruta'])->Fruta4 != '' &&
                                                                    json_decode($key['fruta'])->Fruta4 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta4 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ $tapa['descripcion'] }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-3">

                                                                @if (json_decode($key['fruta'])->Cjs1 != '0' &&
                                                                    json_decode($key['fruta'])->Cjs1 != '' &&
                                                                    json_decode($key['fruta'])->Cjs1 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta1 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ json_decode($key['fruta'])->Cjs1 }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if (json_decode($key['fruta'])->Cjs2 != '0' &&
                                                                    json_decode($key['fruta'])->Cjs2 != '' &&
                                                                    json_decode($key['fruta'])->Cjs2 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta2 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ json_decode($key['fruta'])->Cjs2 }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if (json_decode($key['fruta'])->Cjs3 != '0' &&
                                                                    json_decode($key['fruta'])->Cjs3 != '' &&
                                                                    json_decode($key['fruta'])->Cjs3 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta3 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ json_decode($key['fruta'])->Cjs3 }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if (json_decode($key['fruta'])->Cjs4 != '0' &&
                                                                    json_decode($key['fruta'])->Cjs4 != '' &&
                                                                    json_decode($key['fruta'])->Cjs4 != 'null')
                                                                    @foreach ($Tapas as $tapa)
                                                                        @if (json_decode($key['fruta'])->Fruta4 == $tapa['cod'])
                                                                            <div class="mb-3">
                                                                                {{ json_decode($key['fruta'])->Cjs4 }}
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-2">

                                                                <a href="{{url('/')}}/editar/{{$key->id}}" class="btn btn-warning btn-lg"
                                                                    style="border-radius: 30px"><i
                                                                        class="nav-icon fa-solid fa-pencil btn-lg "></i></a>


                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-2">

                                                                <a href="#" class="btn btn-danger btn-lg"
                                                                    style="border-radius: 30px"><i
                                                                        class="nav-icon fa fa-trash btn-lg "></i></a>


                                                            </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </form>
                                        @endforeach



                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>


                                {{-- @foreach ($Tabla as $item)
                                    {{ $item }}
                                @endforeach --}}

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
