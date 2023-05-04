@extends('inicio.inicio')

@section('title', 'Mantenimiento')

@section('header')
    <div class="col-lg-10">
        <h2>Cliente</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Prinipal</a>
            </li>
            <li class="breadcrumb-item">
                Cliente
            </li>
        </ol>
    </div>
@endsection

@section('content')

    @csrf
    <div class="d-flex align-content-center">
        <a href="{{ url('/cliente/crear/') }}"> <button class="btn btn-sm btn-success"> <i class="fa fa-plus"
                    aria-hidden="true"></i> Nuevo Cliente</button></a>
    </div>
    <hr>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            @foreach ($Clientes as $Cliente)
                <div class="col-lg-3">
                    <div class="contact-box center-version">
                        <a href="#">
                            <img alt="image" class="img-circle" src="{{ $Cliente->imagen }}" width="100">
                            <h3 class="m-b-xs"><strong>{{ $Cliente->nombres }}</strong></h3>
                            <div class="font-bold">{{ $Cliente->apellidos }}</div>
                            <address class="m-t-md">
                                <strong>{{ $Cliente->razonsocial }}</strong><br>
                                {{ $Cliente->direccion }}<br>
                                <abbr title="Phone">Telf:</abbr> {{ $Cliente->telefono }}<br>
                                <abbr title="Phone">Cel:</abbr> {{ $Cliente->celular }}
                            </address>
                        </a>
                        <div class="contact-box-footer">
                            <div class="m-t-xs btn-group">
                                {{-- <a class="btn btn-xs btn-success text-white"><i class="fa fa-eye" aria-hidden="true"></i>
                                    Ver
                                </a> --}}
                                <a class="btn btn-xs btn-success text-white"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    Editar</a>
                                <a class="btn btn-xs btn-danger text-white"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                    Eliminar</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

<script>
    @section('ready')
    @endsection


    @section('functions')
    @endsection
</script>
