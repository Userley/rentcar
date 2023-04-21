@extends('inicio.inicio')

@section('title', 'Vehículo')

@section('header')
    <div class="col-lg-10">
        <h2>Mantenimiento</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Prinipal</a>
            </li>
            <li class="breadcrumb-item">
                Mantenimiento
            </li>
            <li class="breadcrumb-item">
                Nuevo
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="d-flex align-content-center">
        <a href="{{ url('/mantenimiento/') }}"> <button class="btn btn-primary">Volver</button></a>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-list-alt" aria-hidden="true"></i> Mantenimiento</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtFecha" class="font-weight-bold">Fecha:</label>
                                        <input type="date" class="form-control" id="txtFecha">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="cboPlaca" class="font-weight-bold">Placa:</label>
                                        <select name="" id="cboPlaca" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtMarca" class="font-weight-bold">Marca:</label>
                                        <input type="text" class="form-control" id="txtMarca" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtModelo" class="font-weight-bold">Modelo:</label>
                                        <input type="text" class="form-control" id="txtModelo" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtLugar" class="font-weight-bold">Lugar Asignado:</label>
                                        <input type="text" class="form-control" id="txtLugar" disabled>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="cboRepuesto" class="font-weight-bold">Repuesto:</label>
                                    <div class="input-group">
                                        <select name="" id="cboRepuesto" class="form-control"></select>
                                        <div class="input-group-prepend" data-toggle="modal" data-target="#RepuestoModal">
                                            <button type="button" class="btn btn-warning"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtMarcaRepuesto" class="font-weight-bold">Marca Repuesto:</label>
                                        <input type="text" class="form-control" id="txtMarcaRepuesto">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtSKU" class="font-weight-bold">SKU:</label>
                                        <input type="text" class="form-control" id="txtSKU">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtPrecio" class="font-weight-bold">Precio:</label>
                                        <input type="number" class="form-control" id="txtPrecio">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtKilometraje" class="font-weight-bold">Kilometraje:</label>
                                        <input type="text" class="form-control" id="txtKilometraje">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtDescripcion" class="font-weight-bold">Descripción:</label>
                                        <textarea name="" id="txtDescripcion" class="form-control" cols="1" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-success">Guardar</button>
                        <button class="btn btn-secondary">Limpiar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="RepuestoModal" tabindex="-1" role="dialog" aria-labelledby="RepuestoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Repuesto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="txtProyectoAdd" class="font-weight-bold">Ingrese Nombre Repuesto</label>
                        <input type="text" name="" class="form-control" id="txtProyectoAdd">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveSite">Guardar</button>
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
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveSite">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('ready')

    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("imgvehicle").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
    })

@endsection


@section('functions')

    const inputFile = document.querySelector('#imgvehicle');
    const image = document.querySelector('#imagenPrevisualizacion');

    inputFile.addEventListener('input', async (event) => {
    let imgblob = await comprimirImagen(inputFile.files[0], 25);
    let srcimg = URL.createObjectURL(imgblob);
    base64URL = await encodeFileAsBase64URL(imgblob);
    image.setAttribute('src', base64URL);
    });


@endsection
