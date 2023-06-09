@extends('inicio.inicio')

@section('title', 'Mantenimiento')

@section('header')
    <div class="col-lg-12">
        <h2>Proyecto</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Prinipal</a>
            </li>
            <li class="breadcrumb-item">
                Proyecto
            </li>
        </ol>
        <div class="pull-right">
            <button class="btn btn-success" onclick="SaveProy();"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                Guardar</button>
            <a href="{{ url('/proyecto/') }}"> <button class="btn btn-primary"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i>
                    Volver</button></a>
        </div>
    </div>
@endsection

@section('content')
    @csrf
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
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idnombreproyecto" class="font-weight-bold">Nombre Proyecto:</label>
                                        <input type="text" name="" id="idnombreproyecto" class="form-control w-50"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cboClientes" class="font-weight-bold">Cliente:</label>
                                        <select class="custom-select" name="" id="cboClientes" required>
                                            @foreach ($Clientes as $Cliente)
                                                <option value="{{ $Cliente->idcliente }}">{{ $Cliente->nombres }}
                                                    {{ $Cliente->apellidos }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cboDepartamento" class="font-weight-bold">Departamento:</label>
                                        <select class="custom-select" id="cboDepartamento"
                                            onchange="ObtenerProvincias(event.target.value);" required>
                                            <option selected>-- Todos --</option>
                                            @foreach ($Departamentos as $Departamento)
                                                <option value="{{ $Departamento->iddepartamento }}">
                                                    {{ $Departamento->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cboProvincia" class="font-weight-bold">Provincia:</label>
                                        <select class="custom-select" id="cboProvincia"
                                            onchange="ObtenerDistritos(event.target.value)" required>
                                            <option selected>-- Todos --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cboDistrito" class="font-weight-bold">Distrito:</label>
                                        <select class="custom-select" id="cboDistrito" required>
                                            <option selected>-- Todos --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="idfechaini" class="font-weight-bold">Fecha Inicio:</label>
                                        <input type="date" name="" id="idfechaini" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" id="ffinproy">
                                        <label for="idfechafin" class="font-weight-bold">Fecha Fin:</label>
                                        <input type="date" name="" id="idfechafin" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="fechaindefinida"
                                            onchange="valfechafin(event);">
                                        <label class="form-check-label" for="fechaindefinida">Activo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <label for="cbovehiculo" class="font-weight-bold">Asignar Vehículos:</label>
                            <div class="input-group">
                                <select name="" id="cbovehiculo" class="custom-select">
                                    @foreach ($Vehiculos as $Vehiculo)
                                        <option value="{{ $Vehiculo->idvehiculo }}">{{ $Vehiculo->idvehiculo }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-primary h-100" id="AddCarPro"
                                        onclick="AddCarPro();"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                                {{-- <div class="input-group-prepend">
                                    <button type="button" class="btn btn-danger h-100" id="RemoveCarPro"
                                        onclick="RemoveCarPro();"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs" id="litabs">

                                </ul>
                                <div class="tab-content" id="contenttabs">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-4" style="background-color:rgb(252, 247, 188)"> --}}

                        {{-- <div class="col-md-8">
                            <table class="w-100 text-center m-0 p-0 table-bordered">
                                <thead class="thead-success">
                                    <tr>
                                        <th>Item</th>
                                        <th>Placa</th>
                                        <th>Documentación</th>
                                    </tr>
                                </thead>
                                <tbody id="tblVehiculos">
                                </tbody>
                            </table>
                        </div> --}}
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
        const _get = (name) => {

            let indicador = name.substring(0, 1)

            if (indicador == ".") {
                return document.getElementoByName(name.substring(1, name.length));
            } else if (indicador == "#") {
                return document.getElementById(name.substring(1, name.length));
            }

        }
        // var elem = document.querySelector('.js-switch');
        // var switchery = new Switchery(elem, {
        //     color: '#1AB394'
        // });

        const ObtenerProvincias = (id) => {

            console.log(_get('#cbovehiculo').value);

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
            let ListItemTab = document.getElementById('litabs');
            let ListBodyTab = document.getElementById('contenttabs');

            let tabs = document.getElementById('litabs').querySelectorAll('li');
            let coincidencia = 0;

            tabs.forEach(x => {
                let placa = x.id.substring(3, x.id.length);
                if (placa == Car.value) {
                    coincidencia++;
                }
            });

            if (coincidencia > 0) {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        showMethod: 'slideDown',
                        timeOut: 3000
                    };
                    toastr.warning('¡No puede agregar 2 vehículos con la misma placa!',
                        'Agregar Vehículo');

                }, 500);
                return;
            }


            let htmlLi = `<li class="" id="li-${Car.value}"><a data-toggle="tab" href="#tab-${Car.value}">
              <span class="badge badge-danger" style="display:none" onclick="RemoveCarPro('${Car.value}');">x</span>
              <i class="fa fa-car" ></i> ${Car.value} </a></li>`;

            let htmlTab = `<div id="tab-${Car.value}" class="tab-pane">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="file" class="form-control" multiple="multiple" accept="image/*">
                                    </div>
                                    <hr>
                                        <div id="docs" class="row">
                                        </div>
                                </div>
                            </div>`;

            ListItemTab.innerHTML += htmlLi;
            ListBodyTab.innerHTML += htmlTab;
            TabsAction();
            ListItemTab.querySelector('a').click();
        };

        const RemoveCarPro = (id) => {
            document.getElementById(`li-${id}`).remove();
            document.getElementById(`tab-${id}`).remove();

            let ListItemTab = document.getElementById('litabs');
            let cantTabs = ListItemTab.querySelectorAll('li').length;

            if (cantTabs > 0) {
                TabsAction();
                ListItemTab.querySelector('a').click();
                document.getElementById('litabs').querySelector('li').click();
            }
        };

        const TabsAction = () => {
            let ListItemTab = document.getElementById('litabs');
            ListItemTab.querySelectorAll('li').forEach(x => {
                x.addEventListener('click', (e) => {
                    ListItemTab.querySelectorAll('li').forEach(y => {
                        y.classList.remove('active');
                        y.querySelector('span').style.display = 'none';
                    });
                    x.classList.add('active');
                    x.querySelector('span').style.display = 'inline';
                })
            });

            let ListInputFile = document.getElementById('contenttabs').querySelectorAll('input[type="file"]');
            ListInputFile.forEach(x => {
                x.addEventListener('change', () => {
                    Array.from(x.files).forEach(img => {
                        let elementDiv = x.closest('.tab-pane').querySelector('#docs');
                        convertToBase64(img, elementDiv);
                    });
                });
            });
        };

        const DelImgCar = (e) => {
            let element = e.target.closest('div');
            element.remove();
        };

        function convertToBase64(file, element) {
            var reader = new FileReader();
            reader.onload = function(event) {
                var base64String = event.target.result;
                element.innerHTML +=
                    `<div class="col-md-4"><input type="text" value="${base64String}"" style="display:none"><span class="badge badge-xs badge-danger" onclick="DelImgCar(event);"><i class="fa fa-trash-o fa-sm" aria-hidden="true"></i></span> <i class="fa fa-file-image-o fa-sm" aria-hidden="true"></i><span id="nombreimg"> ${file.name}</span></div>`;
            };
            reader.readAsDataURL(file);
        }


        const valfechafin = (e) => {
            let element = e.target;
            let fechafin = document.getElementById('idfechafin');
            if (element.checked) {
                fechafin.disabled = true;
            } else {
                fechafin.disabled = false;
            }


        };

        const SaveProy = () => {

            let seccion = document.querySelector('.ibox-content');
            let ListItemTab = document.getElementById('litabs');
            let cantTabs = ListItemTab.querySelectorAll('li').length;


            if (validateControls(seccion)) {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        showMethod: 'slideDown',
                        timeOut: 3000
                    };
                    toastr.warning('¡Debe completar todos los campos obligatorios!',
                        'Registro de proyecto');

                }, 500);
                return;
            }

            if (cantTabs <= 0) {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        showMethod: 'slideDown',
                        timeOut: 3000
                    };
                    toastr.warning('¡Debe agregar al menos un vehículo!',
                        'Registro de proyecto');

                }, 500);
                return;
            }


            let nomProyecto = document.getElementById('idnombreproyecto').value;
            let cliente = document.getElementById('cboClientes').value;
            let departamento = document.getElementById('cboDepartamento').value;
            let provincia = document.getElementById('cboProvincia').value;
            let distrito = document.getElementById('cboDistrito').value;
            let fechaIni = document.getElementById('idfechaini').value;
            let fechaFin = document.getElementById('idfechafin').value;
            let Indefinido = document.getElementById('fechaindefinida').checked;
            let lstVehiculos = document.getElementById('contenttabs').querySelectorAll('.tab-pane');





            let vehiculos = Array();
            lstVehiculos.forEach(x => {
                let objVehiculo = Array();
                x.querySelectorAll('.col-md-4').forEach(y => {
                    Array.from(y.querySelectorAll('input')).map(z => {
                        let jsonImg = {
                            base64: z.value,
                            nombre: y.querySelector('#nombreimg').innerText
                        };
                        objVehiculo.push(jsonImg)
                    });
                })
                let json = {
                    placa: x.id.substring(4, x.id.length),
                    imagenes: objVehiculo,

                };
                vehiculos.push(json);
            });
            // const vehiculos = Array.from(lstVehiculos).map(vehiculo => vehiculo.innerHTML).join(',');

            // console.log({
            //     nomProyecto
            // }, {
            //     cliente
            // }, {
            //     departamento
            // }, {
            //     provincia
            // }, {
            //     distrito
            // }, {
            //     fechaIni
            // }, {
            //     fechaFin
            // }, {
            //     vehiculos
            // });
            console.log(vehiculos);

            $.ajax({
                url: "{{ route('proyecto.saveProyecto') }}",
                method: 'POST',
                data: {
                    _token: $("input[name='_token']").val(),
                    proyecto: nomProyecto,
                    cliente: cliente,
                    departamento: departamento,
                    provincia: provincia,
                    distrito: distrito,
                    fechaini: fechaIni,
                    fechafin: fechaFin,
                    vehiculos: vehiculos
                }
            }).done(function(data) {


                if (data >= 1) {
                    document.getElementById('idnombreproyecto').value = "";
                    document.getElementById('cboClientes').selectedIndex = 0;
                    document.getElementById('cboDepartamento').value = '-- Todos --';
                    document.getElementById('cboProvincia').value = '-- Todos --';
                    document.getElementById('cboDistrito').value = '-- Todos --';
                    document.getElementById('idfechaini').value = GetDate();
                    document.getElementById('idfechafin').value = '';
                    document.getElementById('fechaindefinida').checked = false;
                } else {
                    setTimeout(function() {
                        toastr.options = {
                            closeButton: true,
                            showMethod: 'slideDown',
                            timeOut: 3000
                        };
                        toastr.danger('¡Hubo un error al registrar proyecto!',
                            'Registro de proyecto');

                    }, 500);
                }


                console.log(data);
            });
        };
    @endsection
</script>
