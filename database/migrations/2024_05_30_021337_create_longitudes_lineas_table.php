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
        Schema::create('longitudes_lineas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_linea');
            $table->float('longitud_km');
            $table->timestamps();

            $table->foreign('id_linea')
                ->references('id')
                ->on('lineas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('longitudes_lineas');
    }
};
