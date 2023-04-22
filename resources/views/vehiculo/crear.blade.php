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
    @csrf
    <div class="d-flex align-content-center">
        <a href="{{ url('/vehiculo/') }}"> <button class="btn btn-primary">Volver</button></a>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-car" aria-hidden="true"></i> Vehículo</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtPlaca" class="font-weight-bold">Placa:</label>
                                        <input type="text" class="form-control" id="txtPlaca">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtMarca" class="font-weight-bold">Marca:</label>
                                        <input type="text" class="form-control" id="txtMarca">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="txtModelo" class="font-weight-bold">Modelo:</label>
                                        <input type="text" class="form-control" id="txtModelo">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cboProveedor" class="font-weight-bold">Proveedor:</label>
                                        <select name="" id="cboProveedor" class="form-control">
                                            @foreach ($Proveedores as $Proveedor)
                                                <option value="{{ $Proveedor->idproveedor }}">
                                                    {{ $Proveedor->descripcion }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtKilometraje" class="font-weight-bold">Kilometraje:</label>
                                        <input type="text" class="form-control" id="txtKilometraje">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    {{-- <label for="txtProyecto" class="font-weight-bold">Proyecto:</label>
                                    <div class="input-group">
                                        <input type="text" id="txtProyecto" class="form-control" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                        <div class="input-group-prepend" data-toggle="modal" data-target="#proyectoModal">
                                            <button type="button" class="btn btn-warning"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div> --}}

                                    <label for="cboProyecto" class="font-weight-bold">Proyecto:</label>
                                    <div class="input-group">
                                        <select name="" id="cboProyecto" class="form-control">
                                            @foreach ($Proyectos as $Proyecto)
                                                <option value="{{ $Proyecto->idProyecto }}">
                                                    {{ $Proyecto->descripcion }}</option>
                                            @endforeach
                                            <option value="000">Nuevo</option>
                                        </select>
                                        <div class="input-group-prepend" id="btnAddProy" data-toggle="modal"
                                            data-target="#proyectoModal" style="display: none">
                                            <button type="button" class="btn btn-warning"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <label for="lugarTrabajo" class="font-weight-bold">Lugar Trabajo:</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" style="height: 34px;"
                                                id="lugarTrabajo" placeholder="placa" value="CUSCO" disabled>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                                    data-target="#exampleModal">Cambiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtDescripcion" class="font-weight-bold">Descripción:</label>
                                        <textarea name="" id="txtDescripcion" class="form-control" cols="1" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group text-center mb-4">
                                <img style="height: 145px;" class="rounded shadow image"
                                    src="https://s3.us-east-2.amazonaws.com/dealer-inspire-vps-vehicle-images/1f0d-18003616/thumbnails/large/19UUB7F94PA000857/6575a8108bbd401195a8aad82c3cc8b9.jpg"
                                    id="imagenPrevisualizacion">
                            </div>

                            <label class="font-weight-bold">Imágen:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imgvehicle" accept="image/*">
                                    <label class="custom-file-label" for="imgvehicle">Seleccionar</label>
                                </div>
                                {{-- <div class="input-group-append">
                                    <button type="button" class="btn btn-primary btn-lg"
                                        id="inputGroupFileAddon02">Subir</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-success">Guardar</button>
                        <button class="btn btn-secondary">Limpiar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="proyectoModal" tabindex="-1" role="dialog" aria-labelledby="proyectoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="txtProyectoAdd" class="font-weight-bold">Ingrese Nombre Proyecto</label>
                        <input type="text" name="" class="form-control" id="txtProyectoAdd">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="GuardarProyecto();"
                        id="saveSite">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubicaciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="cboDepartamento" class="font-weight-bold">Departamento:</label>
                                <select class="custom-select" id="cboDepartamento"
                                    onchange="ObtenerProvincias(event.target.value);">
                                    <option selected>-- Todos --</option>
                                    @foreach ($Departamentos as $Departamento)
                                        <option value="{{ $Departamento->iddepartamento }}">
                                            {{ $Departamento->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="cboProvincia" class="font-weight-bold">Provincia:</label>
                                <select class="custom-select" id="cboProvincia"
                                    onchange="ObtenerDistritos(event.target.value)">
                                    <option selected>-- Todos -- </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="cboDistrito" class="font-weight-bold">Distrito:</label>
                                <select class="custom-select" id="cboDistrito">
                                    <option selected>-- Todos -- </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="GuardarLugar();"
                        id="saveSite">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    @section('ready')

        // let Proyectos = '{{ $Proyectos }}';
        // let lstProyecto = [];

        // JSON.parse(HtmlEncode(Proyectos)).forEach(x => {
        //     lstProyecto.push(x.descripcion);
        // });
        // console.log(lstProyecto);
        // $('#txtProyecto').typeahead({
        //     source: lstProyecto
        // });
        document.querySelector('#cboProyecto').addEventListener('change', function(e) {
            if (e.target.value == '000') {
                document.getElementById('btnAddProy').setAttribute('style', 'display:inline');
            } else {
                document.getElementById('btnAddProy').setAttribute('style', 'display:none');
            }
        })

        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var fileName = document.getElementById("imgvehicle").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    @endsection
</script>
<script>
    @section('functions')

        const inputFile = document.querySelector('#imgvehicle');
        const image = document.querySelector('#imagenPrevisualizacion');

        inputFile.addEventListener('input', async (event) => {
            let imgblob = await comprimirImagen(inputFile.files[0], 25);
            let srcimg = URL.createObjectURL(imgblob);
            base64URL = await encodeFileAsBase64URL(imgblob);
            image.setAttribute('src', base64URL);
        });


        const ObtenerProvincias = (id) => {
            $.ajax({
                url: "{{ route('vehiculo.getProvincias') }}",
                method: 'Get',
                data: {
                    '_token': $("input[name='_token']").val(),
                    'iddepartamento': id
                }
            }).done(function(data) {
                let ver = JSON.parse(data);
                let comboProvincia = document.getElementById('cboProvincia');
                let options = '';
                ver.forEach(element => {
                    options += '<option value="' + element.idprovincia + '">' +
                        decodeURI(element.descripcion) + '</option>';
                });
                comboProvincia.innerHTML = options;

                if (data) {
                    ObtenerDistritos(comboProvincia.options[comboProvincia.selectedIndex].value);
                }

            });
        };

        const ObtenerDistritos = (id) => {
            $.ajax({
                url: "{{ route('vehiculo.getDistritos') }}",
                method: 'Get',
                data: {
                    '_token': $("input[name='_token']").val(),
                    'idprovincia': id
                }
            }).done(function(data) {
                let ver = JSON.parse(data);
                let comboDistrito = document.getElementById('cboDistrito');
                let options = '';
                ver.forEach(element => {
                    options += '<option value="' + element.iddistrito + '">' +
                        decodeURI(element.descripcion) + '</option>';
                });
                comboDistrito.innerHTML = options;
            });

        }

        const GuardarLugar = () => {
            let comboDepartamento = document.getElementById('cboDepartamento');
            let comboProvincia = document.getElementById('cboProvincia');
            let comboDistrito = document.getElementById('cboDistrito');
            let LugarTrabajo = document.getElementById('lugarTrabajo');

            LugarTrabajo.value = comboDepartamento.options[comboDepartamento.selectedIndex].text + " / " +
                comboProvincia.options[comboProvincia.selectedIndex].text + " / " + comboDistrito.options[
                    comboDistrito.selectedIndex].text;

            $('#exampleModal').modal('hide');
        }

        const GuardarProyecto = () => {
            let txtProyectoADD = document.getElementById('txtProyectoAdd');

            $.ajax({
                url: "{{ route('vehiculo.saveProyecto') }}",
                method: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    proyecto: txtProyectoADD.value
                }
            }).done(function(data) {
                let datos = HtmlEncode(data);
                $select = document.querySelector("#cboProyecto");
                $('#cboProyecto option').remove();

                JSON.parse(HtmlEncode(datos)).forEach(x => {
                    const option = document.createElement('option');
                    option.value = x.idproyecto;
                    option.text = x.descripcion;
                    $select.appendChild(option);
                });

                const option = document.createElement('option');
                option.value = "000";
                option.text = "Nuevo";
                $select.appendChild(option);

                // $('#txtProyecto').typeahead({
                //     source: lstProys
                // });
            });
            $('#proyectoModal').modal('hide');
        }

        const HtmlEncode = (s) => {
            var el = document.createElement("div");
            el.innerHTML = s;
            s = el.innerHTML;
            return s;
        }
    @endsection
</script>
