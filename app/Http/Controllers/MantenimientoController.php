<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function index()
    {
        return view('mantenimiento.index');
    }

    public function crear()
    {
        $Vehiculo = Vehiculo::all();
        return view('mantenimiento.crear', compact("Vehiculo"));
    }
}
