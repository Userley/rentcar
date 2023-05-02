<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehiculo_lugar', function (Blueprint $table) {
            $table->string('idvehiculolugar',10)->primary();
            $table->string('idvehiculo');
            $table->integer('idproyecto');
            $table->integer('iddepartamento');
            $table->integer('idprovincia');
            $table->integer('iddistrito');
            $table->date('fechainicio');
            $table->date('fechafin')->nullable(true);
            $table->bigInteger('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo_lugar');
    }
};
