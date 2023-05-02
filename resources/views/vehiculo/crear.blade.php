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
        <a href="{{ url('/vehiculo/') }}"> <button class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>
                Volver</button></a>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtPlaca" class="font-weight-bold">Placa:</label>
                                        <input type="text" class="form-control" id="txtPlaca">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtMarca" class="font-weight-bold">Marca:</label>
                                        <input type="text" class="form-control" id="txtMarca">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtModelo" class="font-weight-bold">Modelo:</label>
                                        <input type="text" class="form-control" id="txtModelo">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtKilometraje" class="font-weight-bold">Kilometraje:</label>
                                        <input type="text" class="form-control" id="txtKilometraje">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="cboProveedor" class="font-weight-bold">Proveedor:</label>
                                    <div class="input-group mb-3">
                                        <select name="" id="cboProveedor" class="form-control">
                                            @foreach ($Proveedores as $Proveedor)
                                                <option value="{{ $Proveedor->idproveedor }}">
                                                    {{ $Proveedor->descripcion }}</option>
                                            @endforeach

                                        </select>
                                        <div class="input-group-prepend" data-toggle="modal" data-target="#ProveedorModal"
                                            data-backdrop="static" data-keyboard="false">
                                            <button type="button" class="btn btn-outline-warning h-100"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="btnDocumentos" class="font-weight-bold">Documentos:</label>
                                        <div class="text-center">
                                            <button class="btn btn-danger w-75" id="btnDocumentos" data-toggle="modal"
                                                data-target="#DocumentoModal" data-backdrop="static"
                                                data-keyboard="false"><i class="fa fa-files-o" aria-hidden="true"></i>
                                                Agregar
                                                <span class="badge badge-success" id="totaldoc">0</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <label for="cboProyecto" class="font-weight-bold">Proyecto:</label>
                                    <div class="input-group">
                                        <select name="" id="cboProyecto" class="form-control">
                                            @foreach ($Proyectos as $Proyecto)
                                                <option value="{{ $Proyecto->idProyecto }}">
                                                    {{ $Proyecto->descripcion }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-prepend" data-toggle="modal" data-target="#proyectoModal"
                                            data-backdrop="static" data-keyboard="false">
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
                                                    data-target="#exampleModal" data-backdrop="static"
                                                    data-keyboard="false">Cambiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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
                                <img style="height: 150px;" class="rounded shadow image"
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
                        <button class="btn btn-success" onclick="Guardarvehiculo();"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i>
                            Guardar</button>
                        <button class="btn btn-secondary"><i class="fa fa-refresh" aria-hidden="true"></i>
                            Limpiar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="DocumentoModal" tabindex="-1" role="dialog" aria-labelledby="DocumentoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Registro de documentos</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtDocumentoAdd" class="font-weight-bold">Nombre Documento</label>
                                <input type="text" name="" class="form-control" id="txtDocumentoAdd">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtDocumentoIni" class="font-weight-bold">Fecha Inicio:</label>
                                <input type="date" name="" class="form-control" id="txtDocumentoIni">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="txtDocumentoFin" class="font-weight-bold">Fecha Fin:</label>
                                <input type="date" name="" class="form-control" id="txtDocumentoFin">
                            </div>
                        </div>
                        <div class="col-md-3 align-bottom">
                            <div class="form-group ">
                                <button type="button" name="" class="btn btn-success w-100 mt-4"
                                    onclick="AddDocument();" id="btnDocumentoSave"><i class="fa fa-plus"
                                        aria-hidden="true"></i> Agregar</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table class="table table-sm table-striped" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th style="width: 10%">Eliminar</th>
                                <th style="width: 10%">Editar</th>
                                <th style="width: 50%">Documento</th>
                                <th style="width: 15%">Fecha Inicio</th>
                                <th style="width: 15%">Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody id="tblbodydocumentos">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"
                        onclick="" id="saveSite">Aceptar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="ProveedorModal" tabindex="-1" role="dialog" aria-labelledby="ProveedorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="txtProveedorADD" class="font-weight-bold">Nombre Proveedor</label>
                        <input type="text" name="" class="form-control" id="txtProveedorADD">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="GuardarProveedor();"
                        id="saveSite">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    @section('ready')
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var fileName = document.getElementById("imgvehicle").files[0].name;
            var nextSibling = e.target.nextElementSibling;
            nextSibling.innerText = fileName;
        });
    @endsection

    @section('functions')

        const inputFile = document.querySelector('#imgvehicle');
        const image = document.querySelector('#imagenPrevisualizacion');

        inputFile.addEventListener('input', async (event) => {
            let imgblob = await comprimirImagen(inputFile.files[0], 25);
            let srcimg = URL.createObjectURL(imgblob);
            base64URL = await encodeFileAsBase64URL(imgblob);
            image.setAttribute('src', base64URL);
        });

        const GuardarProveedor = () => {
            let txtProveedorADD = document.getElementById('txtProveedorADD');

            $.ajax({
                url: "{{ route('proveedor.saveProveedor') }}",
                method: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    proyecto: txtProveedorADD.value
                }
            }).done(function(data) {
                let datos = HtmlEncode(data);
                $select = document.querySelector("#cboProveedor");
                $('#cboProveedor option').remove();

                JSON.parse(HtmlEncode(datos)).forEach(x => {
                    const option = document.createElement('option');
                    option.value = x.idproveedor;
                    option.text = x.descripcion;
                    $select.appendChild(option);
                });
            });
            $('#ProveedorModal').modal('hide');
            txtProveedorADD.value = '';
        }



        const Guardarvehiculo = () => {
            let Placa = document.getElementById('txtPlaca').value;
            let Marca = document.getElementById('txtMarca').value;
            let Modelo = document.getElementById('txtModelo').value;
            let Kilometraje = document.getElementById('txtKilometraje').value;
            let Proveedor = document.getElementById('cboProveedor').value;
            let Descripcion = document.getElementById('txtDescripcion').value;
            let Imagen = base64URL;
            let Docs = document.getElementById('tblbodydocumentos').querySelectorAll('tr');

            let lstDoc = [];

            Docs.forEach(x => {
                let fila = x.querySelectorAll('td');

                let Fecha1 = fila[3].innerText;
                let Fecha2 = fila[4].innerText;

                let doc = fila[2].innerText;
                let FIni = Fecha1;
                let FFin = Fecha2;
                let documento = {
                    Docu: doc,
                    Fini: FIni,
                    Ffin: FFin
                };
                lstDoc.push(documento);
            });

            $.ajax({
                url: "{{ route('vehiculo.SaveVehiculo') }}",
                method: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    placa: Placa,
                    marca: Marca,
                    modelo: Modelo,
                    kilometraje: Kilometraje,
                    idproveedor: Proveedor,
                    descripcion: Descripcion,
                    imagen: Imagen,
                    documentos: lstDoc
                }
            }).done(function(data) {
                console.log(data);
            });


        }

        const AddDocument = () => {

            let nombreDocAdd = document.getElementById('txtDocumentoAdd').value;
            let iniDocAdd = document.getElementById('txtDocumentoIni').value;
            let finDocAdd = document.getElementById('txtDocumentoFin').value;

            let tabla = $('#tblbodydocumentos');

            let fila =
                '<tr><td><button class="btn btn-sm btn-danger" onclick="DeleteDocument(event);"><i class="fa fa-trash" aria-hidden="true"></i></button></td><td><button class="btn btn-sm btn-secondary"><i class="fa fa-pencil" aria-hidden="true"></i></button></td><td>' +
                nombreDocAdd.toString() + '</td><td>' + iniDocAdd.toString() + '</td><td>' + finDocAdd.toString() +
                '</td></tr>';
            tabla.append(fila);

            document.getElementById('totaldoc').innerText = document.getElementById('tblbodydocumentos').rows
                .length;
        }

        const DeleteDocument = (e) => {
            e.target.closest('tr').remove();
            document.getElementById('totaldoc').innerText = document.getElementById('tblbodydocumentos').rows
                .length;
        }



        const HtmlEncode = (s) => {
            var el = document.createElement("div");
            el.innerHTML = s;
            s = el.innerHTML;
            return s;
        }
    @endsection
</script>
