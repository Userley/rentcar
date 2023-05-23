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
        Schema::create('images_proy_vehiculo', function (Blueprint $table) {
            $table->id();
            $table->integer("iddetalleproyecto");
            $table->text("nombreimagen");
            $table->longText("imagen");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_proy_vehiculo');
    }
};
