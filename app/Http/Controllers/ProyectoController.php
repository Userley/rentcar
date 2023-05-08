<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Departamento;
use App\Models\Proyecto;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

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
        return view('proyecto.crear', compact('Departamentos','Clientes','Vehiculos'));
    }

    public function getProyectos()
    {
        $Proyectos = Proyecto::all();

        return response($Proyectos, 200)->header('Content-type', 'text/plain');
    }
}
