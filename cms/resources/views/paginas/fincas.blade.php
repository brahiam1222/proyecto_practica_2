@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height: 264.4px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gráficas</h1>
                    </div>
                    {{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li>
                        </ol>
                    </div> --}}
                </div>
            </div>
        </section>


        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Consolidado</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <iframe title="Taller 5 Inteligencia de Negocios" width="1024" height="500"
                                    src="https://app.powerbi.com/view?r=eyJrIjoiM2ZlZGE4NzAtOGFmMy00ZTQ0LWJiNmYtOTk5MGRiMTRjYzRkIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9&pageName=ReportSection4ec7b2505615b8d37a4b"
                                    frameborder="0" allowFullScreen="true"></iframe>


                            </div>

                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Lluvias</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">


                                <iframe title="Taller 5 Inteligencia de Negocios" width="1024" height="500"
                                    src="https://app.powerbi.com/view?r=eyJrIjoiM2ZlZGE4NzAtOGFmMy00ZTQ0LWJiNmYtOTk5MGRiMTRjYzRkIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9&pageName=ReportSection94510617a44046eb10b7"
                                    frameborder="0" allowFullScreen="true"></iframe>

                            </div>

                        </div>

                        {{-- <div class="card-footer">
                            Footer
                        </div> --}}

                    </div>

                </div>
            </div>
    </div>
    </section>

    </div>
@endsection
