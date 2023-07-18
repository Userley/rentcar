<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
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
                $Repuestos = Repuesto::all();
            }
        } else {
            $Repuestos = [];
        }

        return response(json_decode($Repuestos), 200)->header('Content-type', 'text/plain');
    }

    public function saveMantenimiento(Request $request)
    {
        $status = 0;
        $Mantenimiento = new Mantenimiento();
        $Mantenimiento->fecha = $request->fecha;
        $Mantenimiento->idvehiculo = strval($request->idvehiculo) ;
        $Mantenimiento->idrepuesto = $request->idrepuesto;
        $Mantenimiento->marca = strval($request->marca);
        $Mantenimiento->sku = $request->sku;
        $Mantenimiento->precio = $request->precio;
        $Mantenimiento->kilometraje = $request->kilometraje;
        $Mantenimiento->descripcion = strval($request->descripcion);

        if ($Mantenimiento->save()) {
            $status = 1;
        }

        return response($status, 200)->header('Content-type', 'text/plain');
    }
}
