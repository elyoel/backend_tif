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
        Schema::create('medallas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->varchar('tipo');
            $table->foreign('id_participantes')->references('id')->on('participantes');
            $table->foreign('id_eventos')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medallas');
    }
};
