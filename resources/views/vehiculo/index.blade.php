@extends('inicio.inicio')

@section('title', 'Vehículo')

@section('header')
    <div class="col-lg-10">
        <h2>Vehículo</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Prinipal</a>
            </li>
            <li class="breadcrumb-item">
                Vehículo
            </li>
        </ol>
    </div>
@endsection

@section('content')
    @csrf
    <div class="d-flex align-content-center">
        <a href="{{ url('/vehiculo/crear/') }}"> <button class="btn btn-sm btn-success"><i class="fa fa-plus"
                    aria-hidden="true"></i>
                Nuevo Vehículo</button></a>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-car" aria-hidden="true"></i>
                        Lista Vehículo</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div style="overflow-y: scroll; overflow-x:hidden; height:180px;" class="p-2">
                        <div class="row" id="lstbtns">
                            @foreach ($Vehiculos as $Vehiculo)
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-success shadow-sm w-100"
                                        id="{{ $Vehiculo->idvehiculo }}" style="height: 40px;"
                                        onclick="Activar(event);">{{ $Vehiculo->idvehiculo }}</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="button-group text-center">

                        <button class="btn btn-warning" id="btnEditVehiculo"><i class="fa fa-pencil-square-o"
                                aria-hidden="true"></i> Editar Vehículo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-info-circle" aria-hidden="true"></i> Datos Vehículo</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idplaca" class="label label-primary">Placa:</label>
                                        <input type="text" class="form-control inputData" id="idplaca" value=""
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idmarca" class="label label-primary">Marca:</label>
                                        <input type="text" class="form-control inputData" id="idmarca" value=""
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idmodelo" class="label label-primary">Modelo:</label>
                                        <input type="text" class="form-control inputData" id="idmodelo" value=""
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idproveedor" class="label label-primary">Proveedor:</label>
                                        <input type="text" class="form-control inputData" id="idproveedor" value=""
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idfechaRegistro" class="label label-primary">Fecha Registro:</label>
                                        <input type="text" class="form-control inputData" id="idfechaRegistro"
                                            value="" disabled>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="btnDocumentos" class="label label-primary">Documentos:</label>
                                        <div>
                                            <button class="btn btn-secondary" id="btnDocumentos" data-toggle="modal"
                                                data-target="#DocumentosModal" data-backdrop="static"
                                                data-keyboard="false"><i class="fa fa-eye" aria-hidden="true"></i>
                                                Ver <span class="badge badge-danger" id="totaldocuments">0</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group text-center">
                                <img style="height: 150px;" class="rounded shadow image" src="{!! asset('../resources/img/noimagecar.png') !!}"
                                    id="imgcar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="DocumentosModal" tabindex="-1" role="dialog" aria-labelledby="DocumentosModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Documentos de vehículo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm table-bordered table-striped" style="font-size: 12px">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 50%">Documento</th>
                                <th style="width: 25%">Fecha Inicio</th>
                                <th style="width: 25%">Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody id="tblbodydocs">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('ready')

@endsection

<script>
    @section('functions')

        const Activar = (e) => {
            let btn = e.target.id;
            let contenedorbtn = document.getElementById('lstbtns').querySelectorAll('button');

            contenedorbtn.forEach(element => {
                if (element.id != btn) {
                    element.classList.add('btn-outline-primary');
                    element.classList.remove('btn-primary');
                } else {
                    element.classList.remove('btn-outline-primary');
                    element.classList.add('btn-primary');
                }
            });

            $.ajax({
                url: "{{ route('vehiculo.obtener') }}",
                method: 'GET',
                data: {
                    _token: $("input[name='_token']").val(),
                    idvehiculo: btn
                }
            }).done(function(data) {
                let JsonData = JSON.parse(data);
                let bodydocs = $('#tblbodydocs');
                bodydocs.empty();
                document.getElementById('totaldocuments').innerText = JsonData[1].length;
                
                JsonData[1].forEach(x => {
                    bodydocs.append('<tr><td><strong>' + x.descripcion + '</strong></td><td>' +
                        new Date(x.fechaini)
                        .toLocaleDateString() +
                        '</td><td>' + new Date(x.fechafin).toLocaleDateString() + '</td></tr>');
                })


                let placa = document.getElementById('idplaca');
                let marca = document.getElementById('idmarca');
                let modelo = document.getElementById('idmodelo');
                let proveedor = document.getElementById('idproveedor');
                let fecha = document.getElementById('idfechaRegistro');
                // let activo = document.getElementById('chkactivo');
                let imagen = document.getElementById('imgcar');


                placa.value = JsonData[0].idvehiculo;
                marca.value = JsonData[0].marca;
                modelo.value = JsonData[0].modelo;
                proveedor.value = JsonData[0].descripcion;
                fecha.value = new Date(JsonData[0].created_at).toLocaleDateString();
                imagen.setAttribute('src', JsonData[0].imagen)
                let Estadocheck = JsonData[0].estado > 0

            });
        }

        // const GuardarLugar = () => {
        //     let comboDepartamento = document.getElementById('cboDepartamento');
        //     let comboProvincia = document.getElementById('cboProvincia');
        //     let comboDistrito = document.getElementById('cboDistrito');
        //     let LugarTrabajo = document.getElementById('idlugar');

        //     LugarTrabajo.value = comboDepartamento.options[comboDepartamento.selectedIndex].text + " / " +
        //         comboProvincia.options[comboProvincia.selectedIndex].text + " / " + comboDistrito.options[
        //             comboDistrito.selectedIndex].text;

        //     $('#exampleModal').modal('hide');
        // }
    @endsection
</script>
