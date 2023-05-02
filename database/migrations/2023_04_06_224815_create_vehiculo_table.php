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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->string('idvehiculo',10)->primary();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('idproveedor')->nullable(false);
            $table->decimal('kilometraje', 10, 4)->nullable(true);
            $table->longText('imagen')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo');
    }
};
