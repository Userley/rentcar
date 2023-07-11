<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
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
        $Repuestos = Repuesto::all()->sortDesc(false);
        $Vehiculo = Vehiculo::all()->sortDesc(false);
        return view('mantenimiento.crear', compact("Vehiculo", "Repuestos"));
    }


    public function getDataVehiculo(Request $request)
    {
        if (isset($request->idVehiculo)) {
            $Vehiculo = Vehiculo::query()->where('idvehiculo', $request->idVehiculo)->get()->first();
        } else {
            $Vehiculo = [];
        }

        return response($Vehiculo, 200)->header('Content-type', 'text/plain');
    }

    public function saveRepuesto(Request $request)
    {
        $Repuestos = null;
        if (isset($request->repuesto)) {
            $Repuesto = new Repuesto();
            $Repuesto->descripcion = $request->repuesto;
            $estado = $Repuesto->save();

            if ($estado) {
                $Repuestos = Repuesto::all()->sortDesc(false);
            }
        } else {
            $Repuestos = [];
        }

        return response($Repuestos, 200)->header('Content-type', 'text/plain');
    }
}
