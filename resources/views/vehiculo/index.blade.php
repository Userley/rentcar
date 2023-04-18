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

                        <div class="col-md-4">
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label for="idplaca" class="label label-success">Placa:</label>
                                <input type="text" class="form-control inputData" id="idplaca" placeholder="placa"
                                    value="F2N - 960" disabled>
                            </div>
                            <div class="m-5">
                                <label for="idmarca" class="label label-success">Marca:</label>
                                <input type="text" class="form-control inputData" id="idmarca" placeholder="placa"
                                    value="MITSUBISHI" disabled>
                            </div>
                            <div class="">
                                <label for="idmodelo" class="label label-success">Modelo:</label>
                                <input type="text" class="form-control inputData" id="idmodelo" placeholder="placa"
                                    value="ROSA" disabled>
                            </div>
                            <div class="">
                                <label for="idproveedor" class="label label-success">Proveedor:</label>
                                <input type="text" class="form-control inputData" id="idproveedor" placeholder="placa"
                                    value="AUTOGESA" disabled>
                            </div>
                            <div class="">
                                <label for="idproyecto" class="label label-success">Proyecto:</label>
                                <input type="text" class="form-control inputData" id="idproyecto" placeholder="placa"
                                    value="Proyecto 1" disabled>
                            </div>
                            <div class="">
                                <label for="idlugar" class="label label-success">Lugar Trabajo:</label>
                                <button type="button" style="height: 28px;" class="btn btn-primary btn-sm"
                                    data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <input type="text" class="form-control inputData" id="idlugar" placeholder="placa"
                                    value="CUSCO" disabled>
                            </div>
                        </div>
                        <div class="col-md-5">
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

    {{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
   --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            {{-- <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div> --}}
        </div>
    </div>



@endsection
