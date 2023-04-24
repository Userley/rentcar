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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id('idproyecto');
            $table->string('descripcion');
            $table->integer('idcliente');
            $table->integer('iddepartamento');
            $table->integer('idprovincia');
            $table->integer('iddistrito');
            $table->date('fechaini');
            $table->date('fechafin')->nullable(true);
            $table->bigInteger('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
