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
        Schema::create('vehicledata', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 7)->unique();
            $table->string('chassi', 17)->unique();
            $table->string('renavam', 11)->unique();
            $table->string('UF');
            $table->string('marca')->unique();
            $table->string('modelo', 11)->unique();
            $table->string('KM');
            $table->string('nivel_comb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicledata');
    }
};
