@extends('inicio.inicio')

@section('title', 'Mantenimiento')

@section('header')
    <div class="col-lg-12">
        <h2>Clientes</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="">Principal</a>
            </li>
            <li class="breadcrumb-item">
                Clientes
            </li>
            <li class="breadcrumb-item">
                Nuevo
            </li>
        </ol>
        <div class="pull-right">
            <button class="btn btn-primary" onclick="GuardarCliente();"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                Guardar</button>
            <a href="{{ url('/cliente/') }}"> <button class="btn btn btn-success"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i>
                    Volver</button></a>
        </div>
    </div>
@endsection

@section('content')
    @csrf
    {{-- <div class="d-flex align-content-center">

    </div> --}}

    {{-- <hr> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-user" aria-hidden="true"></i>
                        Datos Cliente</h5>
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
                                        <label for="txtNombreCliente" class="font-weight-bold">
                                            Nombres:
                                        </label>
                                        <input type="text" id="txtNombreCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtApellidoCliente" class="font-weight-bold">
                                            Apellidos:
                                        </label>
                                        <input type="text" id="txtApellidoCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtDocumentoCliente" class="font-weight-bold">
                                            DNI:
                                        </label>
                                        <input type="number" id="txtDocumentoCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtDireccionCliente" class="font-weight-bold">
                                            Dirección:
                                        </label>
                                        <input type="text" id="txtDireccionCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtTelefonoCliente" class="font-weight-bold">
                                            Teléfono:
                                        </label>
                                        <input type="number" id="txtTelefonoCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtCelularCliente" class="font-weight-bold">
                                            Celular:
                                        </label>
                                        <input type="number" id="txtCelularCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr class="divider">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtRazonSocialCliente" class="font-weight-bold">
                                            Razón Social:
                                        </label>
                                        <input type="text" id="txtRazonSocialCliente" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtRazonSocialCliente" class="font-weight-bold">
                                            RUC:
                                        </label>
                                        <input type="text" id="txtRUC" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2 mt-4">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="chkmaster">
                                        <label class="form-check-label" for="chkmaster">Activo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group text-center mb-4">
                                <img style="height: 145px;" class="rounded shadow image" src="{!! asset('../resources/img/noimagecar.png') !!}"
                                    id="imagenPrevisualizacion">
                            </div>

                            <label class="font-weight-bold">Imágen:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imgcliente" accept="image/*">
                                    <label class="custom-file-label" for="imgcliente">Seleccionar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <hr> --}}

                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    @section('ready')
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var fileName = document.getElementById("imgcliente").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    @endsection


    @section('functions')

        const inputFile = document.querySelector('#imgcliente');
        const image = document.querySelector('#imagenPrevisualizacion');

        inputFile.addEventListener('input', async (event) => {
            let imgblob = await comprimirImagen(inputFile.files[0], 25);
            let srcimg = URL.createObjectURL(imgblob);
            base64URL = await encodeFileAsBase64URL(imgblob);
            image.setAttribute('src', base64URL);
        });

        // var elem = document.querySelector('.js-switch');
        // var switchery = new Switchery(elem, {
        //     color: '#1AB394'
        // });

        const GuardarCliente = () => {

            let Nombres = document.getElementById('txtNombreCliente');
            let Apellidos = document.getElementById('txtApellidoCliente');
            let RazonSocial = document.getElementById('txtRazonSocialCliente');
            let Documento = document.getElementById('txtDocumentoCliente');
            let Direccion = document.getElementById('txtDireccionCliente');
            let Telefono = document.getElementById('txtTelefonoCliente');
            let Celular = document.getElementById('txtCelularCliente');
            let Activo = document.getElementById('chkmaster');
            let Imagen = base64URL;


            $.ajax({
                url: "{{ route('cliente.saveCliente') }}",
                method: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    nombres: Nombres.value,
                    apellidos: Apellidos.value,
                    razonsocial: RazonSocial.value,
                    documento: Documento.value,
                    direccion: Direccion.value,
                    telefono: Telefono.value,
                    celular: Celular.value,
                    activo: Activo.checked,
                    imagen: Imagen
                }
            }).done(function(data) {
                console.log(data);
            });
        }
    @endsection
</script>
