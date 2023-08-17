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
        Schema::create('conductor', function (Blueprint $table) {
            $table->id();
            $table->string('CPF', 11)->unique();
            $table->string('CNH', 11)->unique();
            $table->string('RG');
            $table->string('name');
            $table->string('direcction');
            $table->string('phone', 11)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conductor');
    }
};
