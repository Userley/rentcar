@extends('inicio.inicio')

@section('title', 'Mantenimiento')

@section('header')
    <div class="col-lg-10">
        <h2>Mantenimiento</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Principal</a>
            </li>
            <li class="breadcrumb-item">
                Mantenimiento
            </li>
        </ol>
    </div>
@endsection

@section('content')
    @csrf
    <div class="d-flex align-content-center">
        <a href="{{ url('/mantenimiento/crear/') }}"> <button class="btn btn-sm btn-success"> <i class="fa fa-plus"
                    aria-hidden="true"></i> Nuevo Mantenimiento</button></a>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-filter" aria-hidden="true"></i>
                        Filtros Mantenimientos</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cboPlaca" class="font-weight-bold">Placa:</label>
                                <select class="custom-select" id="cboPlaca">
                                    <option selected value="">-- Todos --</option>
                                    @foreach ($Vehiculo as $Vehi)
                                        <option value="{{ $Vehi->idvehiculo }}">{{ $Vehi->idvehiculo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtdateini" class="font-weight-bold">Fecha Ini:</label>
                                <input type="date" class="form-control" id="txtdateini">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtdatefin" class="font-weight-bold">Fecha Fin:</label>
                                <input type="date" class="form-control" id="txtdatefin">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group text-center">
                                <button type="button" style="margin-top: 28px" class="btn btn-primary shadow-sm w-75"
                                    onclick="getAllMantenimientos();"><i class="fa fa-filter" aria-hidden="true"></i>
                                    Filtrar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-cog" aria-hidden="true"></i> Detalle Mantenimiento</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="lstmantenimiento"
                            class="table table-sm table-striped table-bordered table-borderless  dataTables-example">
                            <thead>
                                <tr class="small">
                                    <th>PLACA</th>
                                    <th>PROYECTO</th>
                                    <th>KILOMETRAJE</th>
                                    <th>REPUESTO</th>
                                    <th>MARCA</th>
                                    <th>CODIGO</th>
                                    <th>PRECIO</th>
                                    <th>FECHA</th>
                                    <th>COMENTARIO</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                {{-- @foreach ($Mantenimientos as $Mantenimiento)
                                    <tr>
                                        <td class="text-center font-weight-bold">{{ $Mantenimiento->idvehiculo }}</td>
                                        <td class="text-center">
                                            @if (!is_null($Mantenimiento->proyecto))
                                                {{ $Mantenimiento->proyecto }}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if (!is_null($Mantenimiento->kilometraje))
                                                {{ $Mantenimiento->kilometraje }}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $Mantenimiento->repuesto }}</td>
                                        <td class="text-center">{{ $Mantenimiento->marca }}</td>
                                        <td class="text-center">
                                            @if (!is_null($Mantenimiento->sku))
                                                {{ $Mantenimiento->sku }}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $Mantenimiento->precio }}</td>
                                        <td class="text-center">{{ $Mantenimiento->fecha }}</td>
                                        <td class="text-center">
                                            @if (!is_null($Mantenimiento->descripcion))
                                                {{ $Mantenimiento->descripcion }}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-danger"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                                <button class="btn btn-warning"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        @endsection

        <script>
            @section('ready')

                $('.dataTables-example').DataTable({
                    pageLength: 10,
                    searching: false,
                    bLengthChange: false,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [{
                            extend: 'excel',
                            title: 'ReporteMantenimientos'
                        },
                        {
                            extend: 'pdf',
                            title: 'ReporteMantenimientos'
                        },

                        {
                            extend: 'print',
                            customize: function(win) {
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                            }
                        }
                    ]

                });

                // document.getElementById('DataTables_Table_0_wrapper').classList.remove('form-inline')

                getAllMantenimientos();
            @endsection


            @section('functions')

                const getAllMantenimientos = () => {

                    let idvehiculo = $('#cboPlaca').val() || 0;
                    let dataIni = $('#txtdateini').val() || 0;
                    let dataEnd = $('#txtdatefin').val() || 0;

                    $.ajax({
                        url: "{{ route('mantenimiento.getAllMantenimientos') }}",
                        method: 'Get',
                        data: {
                            '_token': $("input[name='_token']").val(),
                            'idVehiculo': idvehiculo,
                            'dateIni': dataIni,
                            'dateFin': dataEnd,
                        }
                    }).done(function(data) {

                        let Json = JSON.parse(data);
                        console.log(Json);
                        let html = ``;
                        Json.forEach(element => {

                            html += `<tr>
                                        <td class="text-center">${element.idvehiculo}</td>
                                        <td class="text-center">${element.proyecto||'--'}</td>
                                        <td class="text-center">${element.kilometraje||'--'}</td>
                                        <td class="text-center">${element.repuesto}</td>
                                        <td class="text-center">${element.marca}</td>
                                        <td class="text-center">${element.sku||'--'}</td>
                                        <td class="text-center">${element.precio}</td>
                                        <td class="text-center">${element.fecha}</td>
                                        <td class="text-center">${element.descripcion||'--'}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                <button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                    </tr>`;
                        });

                        $('#lstmantenimiento tbody').html(html);
                    });

                }

                // const inputFile = document.querySelector('#imgvehicle');
                // const image = document.querySelector('#imagenPrevisualizacion');

                // inputFile.addEventListener('input', async (event) => {
                //     let imgblob = await comprimirImagen(inputFile.files[0], 25);
                //     let srcimg = URL.createObjectURL(imgblob);
                //     base64URL = await encodeFileAsBase64URL(imgblob);
                //     image.setAttribute('src', base64URL);
                // });
            @endsection
        </script>
