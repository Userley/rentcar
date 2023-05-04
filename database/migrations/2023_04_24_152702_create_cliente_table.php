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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('idcliente');
            $table->string('nombres')->nullable(true);
            $table->string('apellidos')->nullable(false);
            $table->string('razonsocial')->nullable(true);
            $table->integer('documento');
            $table->string('direccion')->nullable(true);
            $table->string('telefono')->nullable(true);
            $table->string('celular')->nullable(true);
            $table->longText('imagen')->nullable(true);
            $table->bigInteger('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
