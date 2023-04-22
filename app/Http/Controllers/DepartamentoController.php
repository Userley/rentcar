<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function GetDepartamentos()
    {
        $Provincias = Departamento::all();

        return response($Provincias, 200)->header('Content-type', 'text/plain');
    }
}
