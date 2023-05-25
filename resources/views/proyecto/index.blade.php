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
    {{$lstProyectos}}
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

                        <table class="table table-hover">
                            <tbody>

                                <tr>
                                    <td class="project-status">
                                        <span class="label label-default">Anulado</span>
                                    </td>
                                    <td class="project-people" style="width: 10px">

                                        <a href=""><img alt="image" class="img-circle"
                                                src="../resources/img/a2.jpg"></a>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Proyecto Trasnporte Agrupación</a>
                                        <br />
                                        <small>La Libertad / Trujillo / Trujillo </small>
                                        <br />
                                        <small><strong>Inicio</strong> 14/08/2014 - <strong>Fin</strong>
                                            14/08/2020</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Proceso de proyecto: 68%</small>
                                        <div class="progress progress-mini ">
                                            <div style="width: 68%;" class="progress-bar" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>

                                    </td>
                                    <td class="project-people">
                                        <span>
                                            <i class="fa fa-car" aria-hidden="true" alt="FN - 960"></i>
                                            <span class="badge badge-secondary">3</span>
                                        </span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">Activo</span>
                                    </td>
                                    <td class="project-people" style="width: 10px">

                                        <a href=""><img alt="image" class="img-circle"
                                                src="../resources/img/a1.jpg"></a>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Proyecto Minero Arequipa</a>
                                        <br />
                                        <small>La Libertad / Trujillo / Trujillo </small>
                                        <br />
                                        <small><strong>Inicio</strong> 14/08/2014 - <strong>Fin</strong>
                                            14/08/2020</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Proceso de proyecto: 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <span>
                                            <i class="fa fa-car" aria-hidden="true" alt="FN - 960"></i>
                                            <span class="badge badge-secondary">4</span>
                                        </span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-default">Anulado</span>
                                    </td>
                                    <td class="project-people" style="width: 10px">

                                        <a href=""><img alt="image" class="img-circle"
                                                src="../resources/img/a2.jpg"></a>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Proyecto Trasnporte Agrupación</a>
                                        <br />
                                        <small>La Libertad / Trujillo / Trujillo </small>
                                        <br />
                                        <small><strong>Inicio</strong> 14/08/2014 - <strong>Fin</strong>
                                            14/08/2020</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Proceso de proyecto: 68%</small>
                                        <div class="progress progress-mini ">
                                            <div style="width: 68%;" class="progress-bar" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>

                                    </td>
                                    <td class="project-people">
                                        <span>
                                            <i class="fa fa-car" aria-hidden="true" alt="FN - 960"></i>
                                            <span class="badge badge-secondary">3</span>
                                        </span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">Activo</span>
                                    </td>
                                    <td class="project-people" style="width: 10px">

                                        <a href=""><img alt="image" class="img-circle"
                                                src="../resources/img/a1.jpg"></a>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Proyecto Minero Arequipa</a>
                                        <br />
                                        <small>La Libertad / Trujillo / Trujillo </small>
                                        <br />
                                        <small><strong>Inicio</strong> 14/08/2014 - <strong>Fin</strong>
                                            14/08/2020</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Proceso de proyecto: 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <span>
                                            <i class="fa fa-car" aria-hidden="true" alt="FN - 960"></i>
                                            <span class="badge badge-secondary">4</span>
                                        </span>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    @section('ready')
        $('#loading-example-btn').click(function() {
            btn = $(this);
            simpleLoad(btn, true)

            // Ajax example
            //                $.ajax().always(function () {
            //                    simpleLoad($(this), false)
            //                });

            simpleLoad(btn, false)
        });
    @endsection


    @section('functions')
        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function() {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    @endsection
</script>
