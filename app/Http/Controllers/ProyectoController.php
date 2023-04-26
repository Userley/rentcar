<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        return view('proyecto.index');
    }

    public function crear()
    {
        $Departamentos = Departamento::all();
        return view('proyecto.crear', compact('Departamentos'));
    }

    public function getProyectos()
    {
        $Proyectos = Proyecto::all();

        return response($Proyectos, 200)->header('Content-type', 'text/plain');
    }
}
