<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        return view('proyecto.index');
    }

    public function crear()
    {
        return view('proyecto.crear');
    }
}
