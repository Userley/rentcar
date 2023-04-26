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






}
