<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedor.index');
    }

    public function crear()
    {
        return view('proveedor.crear');
    }

    public function saveProveedor(Request $request)
    {
        $Proyecto =  new Proveedor();
        $Proyecto->descripcion = $request->proyecto;
        $Proyecto->save();

        $Proyectos = Proveedor::all();

        return response($Proyectos, 200)->header('Content-type', 'text/plain');
    }
}
