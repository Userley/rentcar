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
    <div>
        <a href="{{ url('/vehiculo/crear/') }}"> <button class="btn btn-success">Nuevo Vehículo</button></a>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-4">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div style="overflow-y: scroll; height:280px" class="border">
                                <ul class="list-group" id="listafechas">
                                    <li class="list-group-item list-group-item-action" id="" onclick="">
                                        <strong><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        </strong> -

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 pt-2">
                            <div class="button-group text-center">
                                <button class="btn btn-warning" id="btndelinternet">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-globe" aria-hidden="true"></i> Datos Vehículo</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">


                        <div class="col-md-6">
                            <div class="form-group text-center">

                                <picture id="imgcar">
                                    <source srcset="https://www.topgear.com/sites/default/files/2022/07/6_0.jpg"
                                        media="(min-width: 600px)" class="rounded shadow">
                                    <img src="https://www.topgear.com/sites/default/files/2022/07/6_0.jpg" alt="MDN"
                                        style="width:300px;" class="rounded shadow">
                                </picture>
                            </div>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" accept=".png, .jpg">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary btn-lg"
                                        id="inputGroupFileAddon02">Subir</button>
                                    {{-- <span class="input-group-text bg-primary" id="inputGroupFileAddon02">Subir</span> --}}
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idplaca" class="label label-success">Placa:</label>
                                        <input type="text" class="form-control inputData" id="idplaca"
                                            placeholder="placa" value="F2N - 960" disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idmarca" class="label label-success">Marca:</label>
                                        <input type="text" class="form-control inputData" id="idmarca"
                                            placeholder="placa" value="MITSUBISHI" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="idmodelo" class="label label-success">Modelo:</label>
                                        <input type="text" class="form-control inputData" id="idmodelo"
                                            placeholder="placa" value="ROSA" disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idproveedor" class="label label-success">Proveedor:</label>
                                        <input type="text" class="form-control inputData" id="idproveedor"
                                            placeholder="placa" value="AUTOGESA" disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="idproyecto" class="label label-success">Proyecto:</label>
                                        <input type="text" class="form-control inputData" id="idproyecto"
                                            placeholder="placa" value="Proyecto 1" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="">
                                        <label for="idlugar" class="label label-success">Lugar Trabajo:</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control inputData" style="height: 34px;"
                                                id="idlugar" placeholder="placa" value="CUSCO" disabled>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-success"
                                                    data-toggle="modal" data-target="#exampleModal">Cambiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label><strong>Actividad en el tiempo</strong></label>
                            <div style="overflow-y: scroll; height:460px; border:1px solid #e9ecef">
                                <div id="vertical-timeline" class="vertical-container dark-timeline">
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-coffee"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>Conference on the sales results for the previous year.
                                            </p>
                                            <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem.
                                            </p>
                                            <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-bolt"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>There are many variations of passages of Lorem Ipsum available.
                                            </p>
                                            <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon navy-bg">
                                            <i class="fa fa-warning"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>The generated Lorem Ipsum is therefore.
                                            </p>
                                            <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-coffee"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>Conference on the sales results for the previous year.
                                            </p>
                                            <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon gray-bg">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <p>Many desktop publishing packages and web page editors now use Lorem.
                                            </p>
                                            <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
