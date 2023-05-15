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
        <a href="{{ url('/proyecto/') }}"> <button class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>
                Volver</button></a>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins animated fadeInRight">
                <div class="ibox-title">
                    <h5><i class="fa fa-filter" aria-hidden="true"></i>
                        Registrar Proyectos</h5>
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
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="idnombreproyecto" class="font-weight-bold">Nombre Proyecto:</label>
                                        <input type="text" name="" id="idnombreproyecto" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cboClientes" class="font-weight-bold">Cliente:</label>
                                        <select class="custom-select" name="" id="cboClientes">
                                            @foreach ($Clientes as $Cliente)
                                                <option value="{{ $Cliente->idcliente }}">{{ $Cliente->nombres }}
                                                    {{ $Cliente->apellidos }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cboProvincia" class="font-weight-bold">Provincia:</label>
                                        <select class="custom-select" id="cboProvincia"
                                            onchange="ObtenerDistritos(event.target.value)">
                                            <option selected>-- Todos --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cboDistrito" class="font-weight-bold">Distrito:</label>
                                        <select class="custom-select" id="cboDistrito">
                                            <option selected>-- Todos --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="idfechaini" class="font-weight-bold">Fecha Inicio:</label>
                                        <input type="date" name="" id="idfechaini" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="mt-4">Indefinido
                                            <input type="checkbox" class="" id="fechaindefinida"
                                                onchange="valfechafin(event);" checked />
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="display: none;" id="ffinproy">
                                        <label for="idfechafin" class="font-weight-bold">Fecha Fin:</label>
                                        <input type="date" name="" id="idfechafin" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-check-label" for="chkmaster"><strong>Activo</strong></label>
                                        <br>
                                        <input type="checkbox" class="js-switch" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="background-color:rgb(252, 247, 188)">
                            <label for="cbovehiculo" class="font-weight-bold">Asignar Vehículos:</label>
                            <div class="input-group">
                                <select name="" id="cbovehiculo" class="custom-select">
                                    @foreach ($Vehiculos as $Vehiculo)
                                        <option value="{{ $Vehiculo->idvehiculo }}">{{ $Vehiculo->idvehiculo }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-primary h-100" id="AddCarPro"
                                        onclick="AddCarPro();"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-danger h-100" id="RemoveCarPro"
                                        onclick="RemoveCarPro();"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <select class="custom-select" size="7" id="CarProyect">
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-success" onclick="SaveProy();"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i>
                            Guardar</button>
                        <button class="btn btn-secondary"><i class="fa fa-refresh" aria-hidden="true"></i>
                            Limpiar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    @section('ready')
        document.getElementById('idfechaini').value = GetDate();
    @endsection


    @section('functions')

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {
            color: '#1AB394'
        });

        const ObtenerProvincias = (id) => {
            $.ajax({
                url: "{{ route('provincia.GetProvincias') }}",
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
                url: "{{ route('distrito.GetDistritos') }}",
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

        };

        const AddCarPro = () => {
            let Car = document.getElementById('cbovehiculo');
            let listavehiculos = document.getElementById('CarProyect').options;

            if (listavehiculos.length > 0) {

                for (var option of listavehiculos) {

                    if (Car.value == option.value) {
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                showMethod: 'slideDown',
                                timeOut: 3000
                            };
                            toastr.warning('Ya existe el vehículo en la lista',
                                'Agregar vehículo');

                        }, 100);
                        return;
                    }
                }
            }
            $('#CarProyect').append('<option value="' + Car.value + '">' + Car.value + '</option>');
        }


        const RemoveCarPro = () => {
            let Element = document.getElementById('CarProyect');
            let Car = Element.options[Element.options.selectedIndex];
            let Index = Element.options.selectedIndex;

            if (Index < 0) {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        showMethod: 'slideDown',
                        timeOut: 3000
                    };
                    toastr.warning('¡No existen vehículos para eliminar!',
                        'Agregar vehículo');

                }, 100);
            } else {
                Car.remove();
                let Index2 = Element.options.selectedIndex;
                if (Index >= 0) {
                    Element.selectedIndex = 0;
                }
            }
        };


        const valfechafin = (e) => {
            let element = e.target;
            let fechafin = document.getElementById('ffinproy');
            if (element.checked) {
                fechafin.style.display = 'none';
            } else {
                fechafin.style.display = 'inline';
            }
        };

        const SaveProy = () => {

            let nomProyecto = document.getElementById('idnombreproyecto').value;
            let cliente = document.getElementById('cboClientes').value;
            let departamento = document.getElementById('cboDepartamento').value;
            let provincia = document.getElementById('cboProvincia').value;
            let distrito = document.getElementById('cboDistrito').value;
            let fechaIni = document.getElementById('idfechaini').value;
            let fechaFin = document.getElementById('idfechafin').value;
            let Indefinido = document.getElementById('fechaindefinida').checked;
            let lstVehiculos = document.getElementById('CarProyect').querySelectorAll('option');
            const vehiculos = Array.from(lstVehiculos).map(vehiculo => vehiculo.innerHTML).join(',');

            console.log({
                nomProyecto
            }, {
                cliente
            }, {
                departamento
            }, {
                provincia
            }, {
                distrito
            }, {
                fechaIni
            }, {
                fechaFin
            }, {
                vehiculos
            });



            // $.ajax({
            //     url: "{{ route('proyecto.saveProyecto') }}",
            //     method: 'POST',
            //     data: {
            //         _token: $("input[name='_token']").val(),
            //         nombre: id,
            //         cliente:,
            //         departamento:,
            //         provincia:,
            //         distrito:,
            //         fechaini:,
            //         fechafin:,
            //         vehiculos:
            //     }
            // }).done(function(data) {
            //     let ver = JSON.parse(data);
            //     let comboDistrito = document.getElementById('cboDistrito');
            //     let options = '';
            //     ver.forEach(element => {
            //         options += '<option value="' + element.iddistrito + '">' +
            //             decodeURI(element.descripcion) + '</option>';
            //     });
            //     comboDistrito.innerHTML = options;
            // });
        };
    @endsection
</script>
