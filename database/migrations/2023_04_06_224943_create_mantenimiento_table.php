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
        Schema::create('mantenimiento', function (Blueprint $table) {
            $table->id('idmantenimiento');
            $table->date("fecha")->nullable(false);
            $table->string("idvehiculo")->nullable(false);
            $table->integer("idproyecto")->nullable(false);
            $table->integer("idrepuesto")->nullable(false);
            $table->string("marca")->nullable(true);
            $table->string("sku")->nullable(true);
            $table->decimal("precio", 10, 2)->nullable(false);
            $table->decimal("kilometraje", 10, 3)->nullable(true);
            $table->string("descripcion")->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimiento');
    }
};
