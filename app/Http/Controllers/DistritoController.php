<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    public function index()
    {
        return view('');
    }
    public function getDistritos(Request $request)
    {
        $Distritos = Distrito::query()->where('idprovincia', $request->idprovincia)->get();

        return response($Distritos, 200)->header('Content-type', 'text/plain');
    }
}
