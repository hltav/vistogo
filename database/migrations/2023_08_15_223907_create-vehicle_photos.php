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
        Schema::create('vehiclephoto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicledata_id');
            $table->string('placa');
            $table->string('dianteira');
            $table->string('traseira');
            $table->string('hodometro');
            $table->string('foto_banco_dianteiro');
            $table->timestamps();

            $table->foreign('vehicledata_id')->references('id')->on('vehicledata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiclephoto');
    }
};
