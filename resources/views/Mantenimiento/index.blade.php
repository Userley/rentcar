@extends('inicio.inicio')

@section('title', 'Mantenimiento')

@section('header')
    <div class="col-lg-10">
        <h2>Mantenimiento</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Principal</a>
            </li>
            <li class="breadcrumb-item">
                Mantenimiento
            </li>
        </ol>
    </div>
@endsection

@section('content')
@csrf
<div class="d-flex align-content-center">
    <a href="{{ url('/mantenimiento/crear/') }}"> <button class="btn btn-sm btn-success"> <i class="fa fa-plus"
                aria-hidden="true"></i> Nuevo Mantenimiento</button></a>
</div>
<hr>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-filter" aria-hidden="true"></i>
                        Filtros Mantenimientos</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cboPlaca" class="font-weight-bold">Placa:</label>
                                <select class="custom-select" id="cboPlaca">
                                    <option selected>-- Todos --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cboMarca" class="font-weight-bold">Marca:</label>
                                <select class="custom-select" id="cboMarca">
                                    <option selected>-- Todos --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cboProveedor" class="font-weight-bold">Proveedor:</label>
                                <select class="custom-select" id="cboProveedor">
                                    <option selected>-- Todos --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cboProyecto" class="font-weight-bold">Proyecto:</label>
                                <select class="custom-select" id="cboProyecto">
                                    <option selected>-- Todos --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cboRepuesto" class="font-weight-bold">Repuesto:</label>
                                <select class="custom-select" id="cboRepuesto">
                                    <option selected>-- Todos --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtdateini" class="font-weight-bold">Fecha Ini:</label>
                                <input type="date" class="form-control" id="txtdateini">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtdatefin" class="font-weight-bold">Fecha Fin:</label>
                                <input type="date" class="form-control" id="txtdatefin">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group text-center">
                                <button type="button" style="margin-top: 28px" class="btn btn-primary shadow-sm w-75"><i
                                        class="fa fa-filter" aria-hidden="true"></i> Filtrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog" aria-hidden="true"></i> Detalle Mantenimiento</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ACCION</th>
                                        <th>PLACA</th>
                                        <th>PROYECTO</th>
                                        <th>KILOMETRAJE</th>
                                        <th>REPUESTO</th>
                                        <th>MARCA</th>
                                        <th>CODIGO</th>
                                        <th>PRECIO</th>
                                        <th>FECHA</th>
                                        <th>COMENTARIO</th>
                                    </tr>
                                </thead>
                                <tbody>


                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-4">

                                    <div class="form-group">
                                        <label for="cboDepartamento">Departamento:</label>
                                        <select class="custom-select" id="cboDepartamento">
                                            <option selected>-- Todos --/option>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cboProvincia">Provincia:</label>
                                        <select class="custom-select" id="cboProvincia">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="cboDistrito">Distrito:</label>
                                        <select class="custom-select" id="cboDistrito">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"
                                id="saveSite">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection


        @section('ready')

            $('.dataTables-example').DataTable({
            pageLength: 15,
            searching: false,
            bLengthChange : false,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                {
                extend: 'excel',
                title: 'ReporteMantenimientos'
                },
                {
                extend: 'pdf',
                title: 'ReporteMantenimientos'
                },

                {
                extend: 'print',
                customize: function(win) {
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');

                $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
                }
                }
                ]

                });

                document.getElementById('DataTables_Table_0_wrapper').classList.remove('form-inline')
            @endsection


            @section('functions')

                {{-- const inputFile = document.querySelector('#imgvehicle');
    const image = document.querySelector('#imagenPrevisualizacion');

    inputFile.addEventListener('input', async (event) => {
    let imgblob = await comprimirImagen(inputFile.files[0], 25);
    let srcimg = URL.createObjectURL(imgblob);
    base64URL = await encodeFileAsBase64URL(imgblob);
    image.setAttribute('src', base64URL);
    }); --}}


            @endsection
