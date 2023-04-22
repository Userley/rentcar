<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Proveedor;
use App\Models\Provincia;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $Departamentos = Departamento::all();
        return view('vehiculo.index', compact('Departamentos'));
    }

    public function crear()
    {
        $Departamentos = Departamento::all();
        $Proyectos = Proyecto::all();
        $Proveedores = Proveedor::all();
        return view('vehiculo.crear', compact('Departamentos', 'Proyectos', 'Proveedores'));
    }


    public function getProvincias(Request $request)
    {
        $Provincias = Provincia::query()->where('iddepartamento', $request->iddepartamento)->get();

        return response($Provincias, 200)->header('Content-type', 'text/plain');
    }

    public function getDistritos(Request $request)
    {
        $Distritos = Distrito::query()->where('idprovincia', $request->idprovincia)->get();

        return response($Distritos, 200)->header('Content-type', 'text/plain');
    }

    public function getProyectos()
    {
        $Proyectos = Proyecto::all();

        return response($Proyectos, 200)->header('Content-type', 'text/plain');
    }

    public function saveProyecto(Request $request)
    {
        $Proyecto =  new Proyecto();
        $Proyecto->descripcion = $request->proyecto;
        $Proyecto->save();

        $Proyectos = Proyecto::all();

        return response($Proyectos, 200)->header('Content-type', 'text/plain');
    }
}
