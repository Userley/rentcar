<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index()
    {
        return view('proyecto.index');
    }
    public function GetProvincias(Request $request)
    {
        $Provincias = Provincia::query()->where('iddepartamento', $request->iddepartamento)->get();

        return response($Provincias, 200)->header('Content-type', 'text/plain');
    }
}
