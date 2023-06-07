<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Documento;
use App\Models\Proveedor;
use App\Models\Provincia;
use App\Models\Proyecto;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class VehiculoController extends Controller
{
    public function index()
    {
        $Departamentos = Departamento::all();
        $Vehiculos = Vehiculo::all();
        return view('vehiculo.index', compact('Departamentos', 'Vehiculos'));
    }

    public function crear()
    {
        $Departamentos = Departamento::all();
        $Proyectos = Proyecto::all();
        $Proveedores = Proveedor::all();
        return view('vehiculo.crear', compact('Departamentos', 'Proyectos', 'Proveedores'));
    }


    public function obtener(Request $request)
    {
        $Vehiculos = Vehiculo::query()->select('proveedor.descripcion','vehiculo.idvehiculo','vehiculo.marca','vehiculo.modelo','vehiculo.imagen','vehiculo.created_at')->join('proveedor','proveedor.idproveedor','=','vehiculo.idproveedor')->where('vehiculo.idvehiculo', $request->idvehiculo)->get()->first();
        $Documentos = Documento::query()->where('idvehiculo', $request->idvehiculo)->get();

        return response([$Vehiculos, $Documentos], 200)->header('Content-type', 'text/plain');
    }

    public function SaveVehiculo(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->idvehiculo = $request->placa;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->idproveedor = $request->idproveedor;
        $vehiculo->kilometraje = $request->kilometraje;
        $vehiculo->imagen = $request->imagen;
        $vehiculo->save();

        if (is_array($request->documentos) || is_object($request->documentos)) {
            foreach ($request->documentos as $doc) {
                $documento =  new Documento();
                $documento->idvehiculo = $request->placa;
                $documento->descripcion = $doc['Docu'];
                $documento->fechaini = $doc['Fini'];
                $documento->fechafin = $doc['Ffin'];
                $documento->save();
            }
        }

        return response($vehiculo->idvehiculo, 200)->header('Content-type', 'text/plain');
    }
}
