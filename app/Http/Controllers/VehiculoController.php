<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        return view('vehiculo.index');
    }

    public function crear()
    {
        return view('vehiculo.crear');
    }
}
