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
        Schema::create('participante__medallas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_participantes');
            $table->unsignedBigInteger('id_medallas');
            $table->foreign('id_participantes')->references('id')->on('participantes')->onDelete('cascade');
            $table->foreign('id_medallas')->references('id')->on('medallas')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participante__medallas');
    }
};
