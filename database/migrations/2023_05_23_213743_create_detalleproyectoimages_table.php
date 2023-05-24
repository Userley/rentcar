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
        Schema::create('detalleproyectoimages', function (Blueprint $table) {
            $table->id("iddetalleproyectoimage");
            $table->integer("iddetalleproyecto");
            $table->text("nombreimagen");
            $table->longText("imagen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleproyectoimages');
    }
};
