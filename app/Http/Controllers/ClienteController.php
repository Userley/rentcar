<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $Clientes = Cliente::all();
        return view('cliente.index', compact('Clientes'));
    }

    public function crear()
    {
        return view('cliente.crear');
    }

    public function saveCliente(Request $request)
    {
        $Cliente = new Cliente();
        $Cliente->nombres = $request->nombres;
        $Cliente->apellidos = $request->apellidos;
        $Cliente->razonsocial = $request->razonsocial;
        $Cliente->documento = $request->documento;
        $Cliente->direccion = $request->direccion;
        $Cliente->telefono = $request->telefono;
        $Cliente->celular = $request->celular;
        $Cliente->estado = $request->activo == 'true' ? 1 : 0;
        $Cliente->imagen = $request->imagen;
        $Cliente->save();

        return response($Cliente, 200)->header('Content-type', 'application/json');
    }
}
