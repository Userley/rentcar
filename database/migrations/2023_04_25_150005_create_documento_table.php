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
        Schema::create('documento', function (Blueprint $table) {
            $table->id('iddocumento');
            $table->integer('idvehiculo');
            $table->string('descripcion');
            $table->date('fechaini');
            $table->date('fechafin');
            $table->bigInteger('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento');
    }
};
