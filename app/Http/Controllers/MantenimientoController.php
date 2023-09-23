<?php

namespace App\Http\Controllers;

use App\Models\DetalleProyecto;
use App\Models\Mantenimiento;
use App\Models\Proyecto;
use App\Models\Repuesto;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function index()
    {
        $Vehiculo = Vehiculo::all()->sortDesc(false);
        return view('mantenimiento.index', compact("Vehiculo"));
    }

    public function crear()
    {
        $Repuestos = Repuesto::all()->sortDesc(false);
        $Vehiculo = Vehiculo::all()->sortDesc(false);
        return view('mantenimiento.crear', compact("Vehiculo", "Repuestos"));
    }


    public function getAllMantenimientos(Request $request)
    {

        $idVehiculo = $request->idVehiculo;
        $dateIni = $request->dateIni;
        $dateFin = $request->dateFin;
        $Mantenimientos = Mantenimiento::query()->select(
            'mantenimiento.idmantenimiento',
            'mantenimiento.fecha',
            'mantenimiento.idvehiculo',
            'proyecto.descripcion as proyecto',
            'repuesto.descripcion as repuesto',
            'mantenimiento.marca',
            'mantenimiento.sku',
            'mantenimiento.precio',
            'mantenimiento.kilometraje',
            'mantenimiento.descripcion'
        )
            ->leftJoin('proyecto', 'mantenimiento.idproyecto', '=', 'proyecto.idproyecto')
            ->join('repuesto', 'mantenimiento.idrepuesto', '=', 'repuesto.idrepuesto');

        if ($idVehiculo != 0) {
            $Mantenimientos->where('mantenimiento.idvehiculo', '=', $idVehiculo);
        } elseif ($dateIni != 0 || $dateFin != 0) {
            $Mantenimientos->whereBetween('mantenimiento.fecha', [$dateIni, $dateFin]);
        }

        return response($Mantenimientos->get(), 200)->header('Content-type', 'text/plain');
    }


    public function getDataVehiculo(Request $request)
    {
        $Vehiculo = [];
        $DataVehiculo = [];
        if (isset($request->idVehiculo)) {
            $Vehiculo = Vehiculo::query()->where('idvehiculo', $request->idVehiculo)->get()->first();
            $IdProyecto = DetalleProyecto::select('idproyecto')->where('idvehiculo', $request->idVehiculo)->max('idproyecto');
            $DataVehiculo["Vehiculo"] = $Vehiculo;
            $DataVehiculo["IdProyecto"] = $IdProyecto;
        }

        return response($DataVehiculo, 200)->header('Content-type', 'text/plain');
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
        $Mantenimiento->idvehiculo = strval($request->idvehiculo);
        $Mantenimiento->idproyecto = $request->idproyecto;
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
