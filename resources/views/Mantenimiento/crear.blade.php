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
    @csrf
    <div class="d-flex align-content-center">
        <a href="{{ url('/mantenimiento/') }}"> <button class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i> Volver</button></a>
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
                                        <select name="" id="cboPlaca" class="form-control"
                                            onchange="getDataVehiculo(event);">
                                            <option value="0">--Select--</option>
                                            @foreach ($Vehiculo as $Vehi)
                                                <option value="{{ $Vehi->idvehiculo }}">{{ $Vehi->idvehiculo }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtMarca" class="font-weight-bold">Marca:</label>
                                        <input type="text" class="form-control" id="txtMarca" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtModelo" class="font-weight-bold">Modelo:</label>
                                        <input type="text" class="form-control" id="txtModelo" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="cboRepuesto" class="font-weight-bold">Repuesto:</label>
                                    <div class="input-group">
                                        <select name="" id="cboRepuesto" class="form-control form-control-sm">
                                            <option value="0">--Select--</option>
                                            @foreach ($Repuestos as $Repuesto)
                                                <option value="{{ $Repuesto->idrepuesto }}">{{ $Repuesto->descripcion }}
                                                </option>
                                            @endforeach
                                        </select>
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
                                        <input type="number" class="form-control" id="txtKilometraje">
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
                        <button class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Guardar</button>
                        <button class="btn btn-secondary"><i class="fa fa-refresh" aria-hidden="true"></i>
                            Limpiar</button>
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
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveSite"
                        onclick="saveRepuesto();">Guardar</button>
                </div>
            </div>
        </div>
    </div>


@endsection

<script>
    @section('ready')
        $('#txtFecha').val(GetDate());
    @endsection


    @section('functions')
        const getDataVehiculo = (e) => {
            $.ajax({
                url: "{{ route('mantenimiento.getDataVehiculo') }}",
                method: 'Get',
                data: {
                    '_token': $("input[name='_token']").val(),
                    'idVehiculo': e.target.value
                }
            }).done(function(data) {
                if (data.length == 0) {
                    $('#txtMarca').val("");
                    $('#txtModelo').val("");
                } else {
                    let Json = JSON.parse(data);
                    $('#txtMarca').val(Json.marca);
                    $('#txtModelo').val(Json.modelo);
                }
            });
        };

        const saveRepuesto = () => {
            let datar = $('#txtProyectoAdd').val();
            $.ajax({
                url: "{{ route('mantenimiento.saveRepuesto') }}",
                method: 'Post',
                data: {
                    '_token': $("input[name='_token']").val(),
                    'repuesto': $('#txtProyectoAdd').val()
                }
            }).done(function(data) {
                let JsonData = JSON.parse(data);
                $('#txtProyectoAdd').val("");
                $('#cboRepuesto').empty();
                let optionHtml = `<option value="0">--Select--</option>`;
                Array.from(JsonData).forEach(x => {
                    optionHtml += `<option value="${x.idrepuesto}">${x.descripcion}</option>`;
                });
                $('#cboRepuesto').append(optionHtml);
            });
        }
    @endsection
</script>
