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


                            {{-- <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imgvehicle" accept="image/*">
                                    <label class="custom-file-label" for="imgvehicle">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary btn-lg"
                                        id="inputGroupFileAddon02">Subir</button>
                                </div>
                            </div> --}}
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
                                {{-- <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idproyecto" class="label label-primary">Proyecto:</label>
                                        <div class="input-group">
                                            <input type="text" id="idproyecto" class="form-control" disabled>
                                            <div class="input-group-prepend" data-toggle="modal"
                                                data-target="#proyectoModalIni">
                                                <button type="button" class="btn btn-outline-warning h-100"><i
                                                        class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idfechaRegistro" class="label label-primary">Fecha Registro:</label>
                                        <input type="text" class="form-control inputData" id="idfechaRegistro"
                                            value="" disabled>
                                    </div>
                                </div>
                                {{-- <div class="col-9">
                                    <div class="">
                                        <label for="idlugar" class="label label-success">Lugar Trabajo:</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control inputData"
                                                id="idlugar"  value="CUSCO" disabled>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-success h-100"
                                                    data-toggle="modal" data-target="#exampleModal">Cambiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="btnDocumentos" class="label label-primary">Documentos:</label>
                                        <div>
                                            <button class="btn btn-danger w-100" id="btnDocumentos" data-toggle="modal"
                                                data-target="#DocumentosModal" data-backdrop="static"
                                                data-keyboard="false"><i class="fa fa-eye" aria-hidden="true"></i>
                                                Ver </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            {{-- <div class="text-center mb-3">
                                <label class="form-check-label" for="chkmaster"><strong>Activo</strong></label>
                                <input type="checkbox" class="js-switch" id="chkactivo" />
                            </div> --}}

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
                    <table class="table table-sm table-striped border" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th style="width: 60%">Documento</th>
                                <th style="width: 20%">Fecha Inicio</th>
                                <th style="width: 20%">Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody id="tblbodydocs">
                            {{-- <tr>
                                <td>SOAT</td>
                                <td>01/01/2023</td>
                                <td>01/01/2024</td>
                            </tr>
                            <tr>
                                <td>Seguro</td>
                                <td>01/01/2023</td>
                                <td>01/01/2024</td>
                            </tr>
                            <tr>
                                <td>Revisión Técnica</td>
                                <td>01/01/2023</td>
                                <td>01/01/2024</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="modal fade" id="proyectoModalIni" tabindex="-1" role="dialog" aria-labelledby="proyectoModalIniLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="txtProyectoAdd" class="font-weight-bold">Ingrese Nombre Proyecto</label>
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
                                <label for="cboDepartamento" class="font-weight-bold">Departamento:</label>
                                <select class="custom-select" id="cboDepartamento"
                                    onchange="ObtenerProvincias(event.target.value);">
                                    <option selected>-- Todos --</option>
                                    @foreach ($Departamentos as $Departamento)
                                        <option value="{{ $Departamento->iddepartamento }}">
                                            {{ $Departamento->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="cboProvincia" class="font-weight-bold">Provincia:</label>
                                <select class="custom-select" id="cboProvincia"
                                    onchange="ObtenerDistritos(event.target.value)">
                                    <option selected>-- Todos --</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="cboDistrito" class="font-weight-bold">Distrito:</label>
                                <select class="custom-select" id="cboDistrito">
                                    <option selected>-- Todos --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveSite"
                        onclick="GuardarLugar();">Guardar</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection



@section('ready')

@endsection

<script>
    @section('functions')

        // var elem = document.querySelector('.js-switch');
        // var switchery = new Switchery(elem, {
        //     color: '#1AB394'
        // });


        const Activar = (e) => {
            let btn = e.target.id;
            let contenedorbtn = document.getElementById('lstbtns').querySelectorAll('button');

            contenedorbtn.forEach(element => {
                // console.log(element.id);
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
                JsonData[1].forEach(x => {
                    bodydocs.append('<tr><td>' + x.descripcion + '</td><td>' + x.fechaini +
                        '</td><td>' + x.fechafin + '</td></tr>');
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
                fecha.value = JsonData[0].created_at;
                imagen.setAttribute('src', JsonData[0].imagen)
                let Estadocheck = JsonData[0].estado > 0
                // activo.checked = Estadocheck;

                // if (Estadocheck) {
                //     document.getElementsByClassName('switchery')[0].classList.remove('DesactivarCheck');
                //     document.getElementsByClassName('switchery')[0].classList.add('ActivarCheck');
                //     document.getElementsByClassName('switchery')[0].childNodes[0].classList.remove(
                //         'ChkOff');
                //     document.getElementsByClassName('switchery')[0].childNodes[0].classList.add('ChkOn');

                // } else {
                //     document.getElementsByClassName('switchery')[0].classList.remove('ActivarCheck');
                //     document.getElementsByClassName('switchery')[0].classList.add('DesactivarCheck');
                //     document.getElementsByClassName('switchery')[0].childNodes[0].classList.remove('ChkOn');
                //     document.getElementsByClassName('switchery')[0].childNodes[0].classList.add('ChkOff');
                // }

                console.log(JsonData[0].estado);
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
