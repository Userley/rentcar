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
        <a href="{{ url('/proyecto/crear/') }}"> <button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>
                Nuevo
                Proyecto</button></a>
    </div>
    <hr>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content animated fadeInUp">

                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h5>All projects assigned to this account</h5>

                                    </div>
                                    <div class="ibox-content">
                                        <div class="row m-b-sm m-t-sm">
                                            <div class="col-md-1">
                                                <button type="button" id="loading-example-btn"
                                                    class="btn btn-white btn-sm"><i class="fa fa-refresh"></i>
                                                    Refresh</button>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="input-group"><input type="text" placeholder="Search"
                                                        class="input-sm form-control"> <span class="input-group-btn">
                                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button>
                                                    </span></div>
                                            </div>
                                        </div>

                                        <div class="project-list">

                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Contract with Zender Company</a>
                                                            <br />
                                                            <small>Created 14.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 48%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 48%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a1.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a2.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a4.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a5.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">There are many variations of
                                                                passages</a>
                                                            <br />
                                                            <small>Created 11.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 28%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 28%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a7.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a6.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-default">Unactive</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Many desktop publishing packages
                                                                and web</a>
                                                            <br />
                                                            <small>Created 10.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 8%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 8%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a5.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Letraset sheets containing</a>
                                                            <br />
                                                            <small>Created 22.07.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 83%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 83%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a2.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a1.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a7.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Contrary to popular belief</a>
                                                            <br />
                                                            <small>Created 14.07.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 97%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 97%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a4.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Contract with Zender Company</a>
                                                            <br />
                                                            <small>Created 14.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 48%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 48%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a1.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a2.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a4.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a5.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">There are many variations of
                                                                passages</a>
                                                            <br />
                                                            <small>Created 11.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 28%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 28%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a7.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a6.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-default">Unactive</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Many desktop publishing packages
                                                                and web</a>
                                                            <br />
                                                            <small>Created 10.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 8%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 8%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a5.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Letraset sheets containing</a>
                                                            <br />
                                                            <small>Created 22.07.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 83%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 83%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a2.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a1.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">Contrary to popular belief</a>
                                                            <br />
                                                            <small>Created 14.07.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 97%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 97%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a4.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="project-status">
                                                            <span class="label label-primary">Active</span>
                                                        </td>
                                                        <td class="project-title">
                                                            <a href="project_detail.html">There are many variations of
                                                                passages</a>
                                                            <br />
                                                            <small>Created 11.08.2014</small>
                                                        </td>
                                                        <td class="project-completion">
                                                            <small>Completion with: 28%</small>
                                                            <div class="progress progress-mini">
                                                                <div style="width: 28%;" class="progress-bar"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-people">
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a7.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a6.jpg"></a>
                                                            <a href=""><img alt="image" class="img-circle"
                                                                    src="img/a3.jpg"></a>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-folder"></i> View </a>
                                                            <a href="#" class="btn btn-white btn-sm"><i
                                                                    class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
