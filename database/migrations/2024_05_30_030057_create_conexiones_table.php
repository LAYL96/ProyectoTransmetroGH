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
        Schema::create('conexiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estacion_origen');
            $table->unsignedBigInteger('id_estacion_destino');
            $table->string('direccion_ip', 15);
            $table->integer('puerto');
            $table->string('protocolo', 10);
            $table->timestamps();

            $table->foreign('id_estacion_origen')->references('id')->on('estaciones')->onDelete('cascade');
            $table->foreign('id_estacion_destino')->references('id')->on('estaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conexiones');
    }
};
