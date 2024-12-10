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
            $table->string('nombre');
            $table->integer('edad');

            $table->unsignedBigInteger('id_eventos');
            $table->unsignedBigInteger('id_pais');
            $table->unsignedBigInteger('id_disciplinas');

            $table->foreign('id_pais')->references('id')->on('pais');
            $table->foreign('id_disciplinas')->references('id')->on('disciplinas');
            $table->foreign('id_eventos')->references('id')->on('eventos');
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
