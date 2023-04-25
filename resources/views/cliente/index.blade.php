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
        <a href="{{ url('/cliente/crear/') }}"> <button class="btn btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> Nuevo Cliente</button></a>
    </div>

    <hr>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="profile.html">

                        <img alt="image" class="img-circle" src="../resources/img/a2.jpg">


                        <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                        <div class="font-bold">Graphics designer</div>
                        <address class="m-t-md">
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-success text-white"><i class="fa fa-eye" aria-hidden="true"></i> Ver
                            </a>
                            <a class="btn btn-xs btn-warning text-white"><i class="fa fa-pencil" aria-hidden="true"></i>
                                Editar</a>
                            <a class="btn btn-xs btn-danger text-white"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                Eliminar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    @section('ready')
    @endsection


    @section('functions')
    @endsection
</script>
