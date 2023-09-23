<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);


Route::controller(DepartamentoController::class)->group(function () {
    Route::get('departamento', 'GetDepartamentos');
});

Route::controller(ProvinciaController::class)->group(function () {
    Route::get('provincia', 'GetProvincias')->name('provincia.GetProvincias');
});

Route::controller(DistritoController::class)->group(function () {
    Route::get('distrito', 'GetDistritos')->name('distrito.GetDistritos');
});

Route::controller(VehiculoController::class)->group(function () {
    Route::get('vehiculo', 'index');
    Route::get('vehiculo/crear', 'crear');
    Route::get('vehiculo/obtener', 'obtener')->name('vehiculo.obtener');
    Route::post('vehiculo/SaveVehiculo', 'SaveVehiculo')->name('vehiculo.SaveVehiculo');
});

Route::controller(ClienteController::class)->group(function () {
    Route::get('cliente', 'index');
    Route::get('cliente/crear', 'crear');
    Route::get('cliente/getProvincias', 'getProvincias')->name('cliente.getProvincias');
    Route::get('cliente/getDistritos', 'getDistritos')->name('cliente.getDistritos');
    // Route::get('contactos/{id}', 'show');
    Route::post('cliente/saveCliente', 'saveCliente')->name('cliente.saveCliente');
});

Route::controller(ProveedorController::class)->group(function () {
    Route::get('proveedor', 'index');
    Route::get('proveedor/crear', 'crear');
    Route::get('proveedor/getProvincias', 'getProvincias')->name('proveedor.getProvincias');
    Route::get('proveedor/getDistritos', 'getDistritos')->name('proveedor.getDistritos');
    // Route::get('contactos/{id}', 'show');
    Route::post('proveedor/saveProveedor', 'saveProveedor')->name('proveedor.saveProveedor');
});

Route::controller(ProyectoController::class)->group(function () {
    Route::get('proyecto', 'index');
    Route::get('proyecto/crear', 'crear');
    Route::get('proyecto/getProvincias', 'getProvincias')->name('proyecto.getProvincias');
    Route::get('proyecto/getDistritos', 'getDistritos')->name('proyecto.getDistritos');

    Route::get('proyecto/getProyectos', 'getProyectos')->name('proyecto.getProyectos');
    // Route::get('contactos/{id}', 'show');
    Route::post('proyecto/saveProyecto', 'saveProyecto')->name('proyecto.saveProyecto');
});

Route::controller(MantenimientoController::class)->group(function () {
    Route::get('mantenimiento', 'index');
    Route::get('mantenimiento/crear', 'crear');

    Route::get('mantenimiento/getDataVehiculo', 'getDataVehiculo')->name('mantenimiento.getDataVehiculo');
    Route::get('mantenimiento/getAllMantenimientos', 'getAllMantenimientos')->name('mantenimiento.getAllMantenimientos');
    
    Route::post('mantenimiento/saveRepuesto', 'saveRepuesto')->name('mantenimiento.saveRepuesto');
    Route::post('mantenimiento/saveMantenimiento', 'saveMantenimiento')->name('mantenimiento.saveMantenimiento');
    // Route::get('contactos/{id}', 'show');
    // Route::post('contactos', 'save')->name('contactos.save');
});
