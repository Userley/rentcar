@extends('inicio.inicio')

@section('title', 'Mantenimiento')

@section('header')
    <div class="col-lg-10">
        <h2>Proyecto</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Prinipal</a>
            </li>
            <li class="breadcrumb-item">
                Proyecto
            </li>
        </ol>
    </div>
    <style>
        /* .image-container {
                    width: 80px;
                    height: 100px;
                    overflow: hidden;
                }

                .image-container img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border: 1px solid rgb(32, 32, 43);
                } */
    </style>
@endsection

@section('content')
    @csrf
    <div class="d-flex align-content-center">
        <a href="{{ url('/proyecto/crear/') }}"> <button class="btn btn-sm btn-success"><i class="fa fa-plus"
                    aria-hidden="true"></i>
                Nuevo
                Proyecto</button></a>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-filter" aria-hidden="true"></i>
                        Filtrar Proyectos</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-cube" aria-hidden="true"></i>
                        Lista Proyectos</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="project-list table-responsive">
                        <table class="table table-hover" id="tblproyectos">
                            <tbody>
                                @foreach ($lstProyectos as $proy)
                                    <tr>
                                        <td class="project-status">
                                            <span
                                                class="label {{ $proy['estado'] == '1' ? 'label-primary' : 'label-default' }}">{{ $proy['estado'] == '1' ? 'Activo' : 'Inactivo' }}</span>
                                        </td>
                                        <td class="project-people" style="width: 10px">
                                            <img alt="image" class="img-circle" src="{{ $proy['cliente'] }}">
                                        </td>
                                        <td class="project-title">
                                            <a href="#">{{ $proy['proyecto'] }}</a>
                                            <br />
                                            <small>{{ $proy['departamento'] }} / {{ $proy['provincia'] }} /
                                                {{ $proy['distrito'] }} </small>
                                            <br />
                                            <small><strong>Inicio:</strong>
                                                {{ date('d/m/Y', strtotime(str_replace('/', '-', $proy['fechaini']))) }} -
                                                <strong>Fin:</strong>
                                                {{ date('d/m/Y', strtotime(str_replace('/', '-', $proy['fechafin']))) }}</small>
                                        </td>
                                        <td class="project-completion">
                                            @foreach ($proy['autos'] as $car)
                                                <span style="font-size: 10px;">{{ $car['idvehiculo'] }}</span><br>
                                            @endforeach
                                            {{-- <small>Transcurso de Proyecto: 0%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 0%;" class="progress-bar " aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div> --}}
                                        </td>
                                        <td class="project-people">
                                            <span>
                                                <i class="fa fa-car" aria-hidden="true" alt="FN - 960"></i>
                                                <span class="badge badge-secondary">{{ count($proy['autos']) }}</span>
                                            </span>
                                        </td>
                                        <td class="project-actions">
                                            <button class="btn btn-success btn-sm"
                                                onclick="showCars('{{ json_encode($proy['autos']) }}');"><i
                                                    class="fa fa-picture-o" aria-hidden="true"></i></button>
                                            <button class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="d-flex justify-content-end" id="ad_data">
                                            {!! $Proyectos->links('pagination::bootstrap-5') !!}
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCars" tabindex="-1" role="dialog" aria-labelledby="modalCarsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCarsLabel"><strong>Imágenes de vehículo</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    @section('ready')
        document.querySelectorAll('.pagination')[1].classList.add('ml-3');
    @endsection


    @section('functions')


        const showCars = (data) => {
            $('#modalCars .modal-body').html('');
            let jsonAutos = JSON.parse(data);

            let grilla = `<div class="row">`;


            jsonAutos.forEach(auto => {
                grilla += `<div class="col-md-12">${auto.idvehiculo} <hr></div>`;
                Array.from(auto.imagenes).forEach(imagen => {

                    grilla += `<div class="col-md-2">`;
                    grilla += `<div class="image-container">`;
                    grilla += `<img src="${imagen.imagen}" style="width:80px;">`;
                    grilla += `</div>`;
                    grilla += `</div>`;
                });
            });
            grilla += `</div>`;

            $('#modalCars .modal-body').append(grilla);
            $('#modalCars').modal('show');

        }
    @endsection
</script>
