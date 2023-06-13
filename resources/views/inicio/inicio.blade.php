<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; utf-8">
    {{-- <link rel="shortcut icon" href="{!! asset('../resources/img/ico/devtools.ico') !!}"> --}}
    <title>RentCar</title>

    <link href="{!! asset('../resources/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('../resources/font-awesome/css/font-awesome.css') !!}" rel="stylesheet">

    <link href="{!! asset('../resources/css/plugins/dataTables/datatables.min.css') !!}" rel="stylesheet">

    {{-- <link href="{!! asset('../resources/css/plugins/footable/footable.core.css" ') !!}" rel="stylesheet">
    <link href="{!! asset('../resources/css/plugins/blueimp/css/blueimp-gallery.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('../resources/css/animate.css') !!}" rel="stylesheet"> --}}
    <link href="{!! asset('../resources/css/style.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('../resources/css/plugins/switchery/switchery.css') !!}">

    <!-- Toastr style -->
    <link href="{!! asset('../resources/css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">

    {{-- <!-- Gritter -->
    <link href="{!! asset('../resources/js/plugins/gritter/jquery.gritter.css') !!}" rel="stylesheet">

    <link href="{!! asset('../resources/css/plugins/iCheck/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('../resources/css/plugins/steps/jquery.steps.css') !!}" rel="stylesheet">
    <link href="{!! asset('../resources/css/plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet"> --}}

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            {{-- <img alt="image" class="rounded-circle" width="100px" src="{!! asset('../resources/img/logo3.png') !!}" /> --}}
                            {{-- <span class="block m-t-xs font-bold">RentCar</span> --}}
                            {{-- <span class="text-muted text-xs block">Sistema de gestión</span> --}}
                        </div>
                        <div class="logo-element">
                            RC+
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i><span
                                class="nav-label">Principal</span></a>
                    </li>

                    <li>
                        <a href="{{ url('/vehiculo/') }}"><i class="fa fa-car" aria-hidden="true"></i> <span
                                class="nav-label">Vehículos</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/cliente/') }}"><i class="fa fa-users" aria-hidden="true"></i><span
                                class="nav-label">Clientes</span></a>
                    </li>

                    <li>
                        <a href="{{ url('/proyecto/') }}"><i class="fa fa-cubes" aria-hidden="true"></i><span
                                class="nav-label">Proyectos</span></a>
                    </li>

                    <li>
                        <a href="{{ url('/mantenimiento/') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> <span
                                class="nav-label">Mantenimientos</span></a>
                        {{-- <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span
                                class="nav-label">Mantenimientos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="search_results.html"><i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Realizados</a></li>
                            <li><a href="lockscreen.html"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    Programados</a></li>
                        </ul> --}}
                    </li>
                    {{-- <li>
                        <a href="{{ url('/') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span
                                class="nav-label">Reportes</span></a>
                    </li> --}}
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars" aria-hidden="true"></i></a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i>Salir
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                @yield('header')
            </div>
            <div class="wrapper wrapper-content ">
                @yield('content')
            </div>
            <div class="footer">
                <div class="float-right">
                    <strong>Copyright</strong> U-Soft &copy; 2023
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{!! asset('../resources/js/jquery-3.1.1.min.js') !!}"></script>
    <script src="{!! asset('../resources/js/popper.min.js') !!}"></script>
    <script src="{!! asset('../resources/js/bootstrap.js') !!}"></script>
    <script src="{!! asset('../resources/js/bootstrap.min.js') !!}"></script>

    <script src="{!! asset('../resources/js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
    <script src="{!! asset('../resources/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

    <script src="{!! asset('../resources/js/plugins/dataTables/datatables.min.js') !!}"></script>
    <!-- Checks -->
    <script src="{!! asset('../resources/js/plugins/switchery/switchery.js') !!}"></script>

    <!-- blueimp gallery -->
    {{--  <script src="{!! asset('../resources/js/plugins/blueimp/jquery.blueimp-gallery.min.js') !!}"></script>

    <!-- Flot -->
    <script src="{!! asset('../resources/js/plugins/flot/jquery.flot.js') !!}"></script>
    <script src="{!! asset('../resources/js/plugins/flot/jquery.flot.tooltip.min.js') !!}"></script>
    <script src="{!! asset('../resources/js/plugins/flot/jquery.flot.spline.js') !!}"></script>
    <script src="{!! asset('../resources/js/plugins/flot/jquery.flot.resize.js') !!}"></script>
    <script src="{!! asset('../resources/js/plugins/flot/jquery.flot.pie.js') !!}"></script>

    <!-- Peity -->
    <script src="{!! asset('../resources/js/plugins/peity/jquery.peity.min.js') !!}"></script>
    <script src="{!! asset('../resources/js/demo/peity-demo.js') !!}"></script> --}}

    <!-- Custom and plugin javascript -->
    <script src="{!! asset('../resources/js/inspinia.js') !!}"></script>
    <script src="{!! asset('../resources/js/plugins/pace/pace.min.js') !!}"></script>

    <script src="{!! asset('../resources/js/plugins/typehead/bootstrap3-typeahead.min.js') !!}"></script>

    <!-- Toastr -->
    <script src="{!! asset('../resources/js/plugins/toastr/toastr.min.js') !!}"></script>

    {{--   <!-- Steps -->
    <script src="{!! asset('../resources/js/plugins/steps/jquery.steps.min.js') !!}"></script>

    <!-- Jquery Validate -->
    <script src="{!! asset('../resources/js/plugins/validate/jquery.validate.min.js') !!}"></script>

    <!-- jQuery UI -->
    <script src="{!! asset('../resources/js/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>

    <!-- GITTER -->
    <script src="{!! asset('../resources/js/plugins/gritter/jquery.gritter.min.js') !!}"></script>

    <!-- Sparkline -->
    <script src="{!! asset('../resources/js/plugins/sparkline/jquery.sparkline.min.js') !!}"></script>

    <!-- Sparkline demo data  -->
    <script src="{!! asset('../resources/js/demo/sparkline-demo.js') !!}"></script>

    <!-- ChartJS-->
    <script src="{!! asset('../resources/js/plugins/chartJs/Chart.min.js') !!}"></script>


    <script src="{!! asset('../resources/js/plugins/sweetalert/sweetalert.min.js') !!}"></script>

    <!-- FooTable -->
    <script src="{!! asset('../resources/js/plugins/footable/footable.all.min.js') !!}"></script> --}}

    <script>
        var base64URL = "";
        var base64URLx = "";

        $(document).ready(function() {
            //     $(".loader").fadeOut("slow");

            //     $('.footable').footable();
            //     $('.footable2').footable();

            @yield('ready')
        });

        const GetDate = () => {
            let date = new Date();
            let year = date.getFullYear();
            let month = date.getMonth() + 1;
            let day = date.getDate();
            if (day < 10)
                day = '0' + day; //agrega cero si el menor de 10
            if (month < 10)
                month = '0' + month; //agrega cero si el menor de 10

            return year + "-" + month + "-" + day;
        };


        function FormatDate(fechaString) {
            const fecha = new Date(fechaString);

            const dia = fecha.getDate();
            const mes = fecha.getMonth() + 1;
            const anio = fecha.getFullYear();

            const diaFormateado = dia.toString().padStart(2, '0');
            const mesFormateado = mes.toString().padStart(2, '0');

            return `${diaFormateado}/${mesFormateado}/${anio}`;
        }

        const round = (value, decimals) => {
            return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
        };

        const encodeFileAsBase64URL = async (file) => {
            return new Promise((resolve) => {
                // debugger;
                const reader = new FileReader();
                reader.addEventListener('loadend', () => {
                    resolve(reader.result);
                });
                reader.readAsDataURL(file);
            });
        };

        const comprimirImagen = (imagenComoArchivo, porcentajeCalidad) => {
            return new Promise((resolve, reject) => {
                const $canvas = document.createElement("canvas");
                const imagen = new Image();
                imagen.onload = () => {
                    $canvas.width = imagen.width;
                    $canvas.height = imagen.height;
                    $canvas.getContext("2d").drawImage(imagen, 0, 0);
                    $canvas.toBlob(
                        (blob) => {
                            if (blob === null) {
                                return reject(blob);
                            } else {
                                resolve(blob);
                            }
                        },
                        "image/jpeg",
                        porcentajeCalidad / 100
                    );
                };
                imagen.src = URL.createObjectURL(imagenComoArchivo);
            });
        };

        const validateControls = (container) => {
            let estado = false;
            let elements = container.querySelectorAll('input,select');

            elements.forEach(x => {
                let elemDiv = x.closest('.form-group')
                if (x.required) {
                    // console.log(x);
                    if (x.type == 'select-one') {
                        if (x.selectedIndex < 0) {
                            x.classList.add('border-danger');
                            estado = true;
                        } else {
                            x.classList.remove('border-danger');
                        }
                    } else {
                        if (x.value.trim() == '') {
                            x.closest('.form-group').classList.add('has-error');
                            estado = true;
                        } else {
                            x.closest('.form-group').classList.remove('has-error');
                        }
                    }
                }
            });
            return estado;
        }

        var images = $(".image");

        $(images).on("load", function(event) {
            $(event.target).css("display", "");
        });

        $(images).on("error", function(event) {
            $(event.target).css("display", "none");
        });



        @yield('functions')
    </script>
</body>

</html>
