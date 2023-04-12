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
        <div class="col-md-5">
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
        <div class="col-md-7">
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
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start">
                                <div class="p-2 label label-success">Placa:</div>
                                <div class="p-2">F2N - 960</div>
                            </div>


                            <label for="placa">Marca:</label>
                            <p id="placa">MITSUBISHI</p>

                            <label for="placa">Modelo:</label>
                            <p id="placa">ROSA</p>

                            <label for="placa">Proveedor:</label>
                            <p id="placa">AUTOGESA</p>

                            <label for="placa">Lugar Trabajo:</label>
                            <p id="placa">CUSCO</p>


                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
