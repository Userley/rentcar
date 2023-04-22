<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\ProvinciaController;
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
    Route::get('provincia', 'GetProvincias');
});

Route::controller(DistritoController::class)->group(function () {
    Route::get('distrito', 'GetDistritos');
});

Route::controller(VehiculoController::class)->group(function () {
    Route::get('vehiculo', 'index');
    Route::get('vehiculo/crear', 'crear');
    Route::get('vehiculo/getProvincias', 'getProvincias')->name('vehiculo.getProvincias');
    Route::get('vehiculo/getDistritos', 'getDistritos')->name('vehiculo.getDistritos');
    // Route::get('contactos/{id}', 'show');
    Route::post('vehiculo/saveProyecto', 'saveProyecto')->name('vehiculo.saveProyecto');
});

Route::controller(MantenimientoController::class)->group(function () {
    Route::get('mantenimiento', 'index');
    Route::get('mantenimiento/crear', 'crear');
    // Route::get('contactos/{id}', 'show');
    // Route::post('contactos', 'save')->name('contactos.save');
});
