<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\DetalleProyecto;
use App\Models\DetalleProyectoImages;
use App\Models\Proyecto;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Nette\Utils\Arrays;

class ProyectoController extends Controller
{
    public function index()
    {

        return view('proyecto.index');
    }

    public function crear()
    {
        $Vehiculos = Vehiculo::all();
        $Departamentos = Departamento::all();
        $Clientes = Cliente::all();
        return view('proyecto.crear', compact('Departamentos', 'Clientes', 'Vehiculos'));
    }

    public function getProyectos()
    {
        $Proyectos = Proyecto::query()->select(
            'proyecto.idproyecto',
            'proyecto.estado',
            'cliente.imagen as Cliente',
            'proyecto.descripcion as Proyecto',
            'departamento.descripcion as Departamento',
            'provincia.descripcion as Provincia',
            'distrito.descripcion as Distrito',
            'proyecto.fechaini',
            'proyecto.fechafin'
        )
            ->join('cliente', 'cliente.idcliente', 'proyecto.idcliente')
            ->join('departamento', 'departamento.iddepartamento', 'proyecto.iddepartamento')
            ->join('provincia', 'provincia.idprovincia', 'proyecto.idprovincia')
            ->join('distrito', 'distrito.iddistrito', 'proyecto.iddistrito')->paginate(10);

        $lstProyectos =  array();
        for ($i = 0; $i < count($Proyectos); $i++) {

            $obj = array(
                'idproyecto' => $Proyectos[$i]->idproyecto,
                'estado' => $Proyectos[$i]->estado,
                'cliente' => $Proyectos[$i]->Cliente,
                'proyecto' => $Proyectos[$i]->Proyecto,
                'departamento' => $Proyectos[$i]->Departamento,
                'provincia' => $Proyectos[$i]->Provincia,
                'distrito' => $Proyectos[$i]->Distrito,
                'fechaini' => $Proyectos[$i]->fechaini,
                'fechafin' => $Proyectos[$i]->fechafin,
                'procentaje' => '',
                'autos' => ''
            );
            array_push($lstProyectos, json_encode($obj));
        }

        return response($lstProyectos, 200)->header('Content-type', 'text/plain');
    }


    public function saveProyecto(Request $request)
    {
        $contOk = 0;
        $Proyecto = new Proyecto();
        $Proyecto->descripcion = $request->proyecto;
        $Proyecto->idcliente = $request->cliente;
        $Proyecto->iddepartamento = $request->departamento;
        $Proyecto->idprovincia = $request->provincia;
        $Proyecto->iddistrito = $request->distrito;
        $Proyecto->fechaini = $request->fechaini;
        $Proyecto->fechafin = $request->fechafin;
        $Proyecto->estado = 1;

        if ($Proyecto->save()) {
            $arrayVehiculos = $request->vehiculos;
            for ($i = 0; $i < count($arrayVehiculos); $i++) {
                $DetalleProyecto = new DetalleProyecto();
                $idProy = $Proyecto->idproyecto;
                $DetalleProyecto->idproyecto = $idProy;
                $DetalleProyecto->idvehiculo = $arrayVehiculos[$i]["placa"];
                $DetalleProyecto->estado = 1;
                $contOk++;

                if ($DetalleProyecto->save()) {
                    $arrayImagenes = $arrayVehiculos[$i]["imagenes"];
                    for ($j = 0; $j < count($arrayImagenes); $j++) {
                        $DetalleProyectoImages = new DetalleProyectoImages();
                        $idDetProy = $DetalleProyecto->iddetalleproyecto;
                        $DetalleProyectoImages->iddetalleproyecto = $idDetProy;
                        $DetalleProyectoImages->nombreimagen = $arrayImagenes[$j]["nombre"];
                        $DetalleProyectoImages->imagen = $arrayImagenes[$j]["base64"];
                        $DetalleProyectoImages->save();
                    }
                }
            }
        }

        $resp = 0;
        if ($contOk == count($arrayVehiculos)) {
            $resp = 1;
        }

        // return response($request->vehiculos[0]["imagenes"][0], 200)->header('Content-type', 'application/json');
        return response($resp, 200)->header('Content-type', 'text/plain');
    }
}
