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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('id_pais')->references('id')->on('pais');
            $table->foreign('id_medallas')->references('id')->on('medallas');
            $table->foreign('id_disciplinas')->references('id')->on('disciplinas');
            $table->foreign('id_eventos')->references('id')->on('eventos');
            $table->varchar('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
