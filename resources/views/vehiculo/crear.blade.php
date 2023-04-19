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
            <li class="breadcrumb-item">
                Nuevo
             </li>
        </ol>
    </div>
@endsection

@section('content')
<div class="d-flex align-content-center">
    <a href="{{ url('/vehiculo/') }}"> <button class="btn btn-primary">Volver</button></a>
</div>

<hr>

<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins animated fadeInRight">
            <div class="ibox-title">
                <h5><i class="fa fa-globe" aria-hidden="true"></i> Detalle consumo</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">

                    <div class="col-md-6">
                        <div class="wrapper wrapper-content animated fadeInRight m-0 p-0">
                            <div class="ibox float-e-margins">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Piso</th>
                                                <th>Personas</th>
                                                <th>Monto x Pers.</th>
                                                <th>Monto x Piso</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbldetalle" class="text-center">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="txtMontoInternet">Monto Recibo:</label>
                                    <input type="text" class="form-control" step="1" name="txtMontoInternet"
                                        id="txtMontoInternet" disabled value="0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="txtComentarios">Comentarios:</label>
                                    <textarea class="form-control" id="txtComentarios" rows="2" disabled></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group text-center">
                            <h5>Imágen Recibo</h5>
                            <div id="links">
                                <a id="imgreciboTemp" href="" title="recibo">
                                    <img id="imgrecibo" src="" width="100" alt="recibo" />
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
