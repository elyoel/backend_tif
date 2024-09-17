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
            $table->string('tipo de medalla');
            $table->unsignedBigInteger('id_eventos');
            $table->foreign('id_eventos')->references('id')->on('eventos');
            $table->timestamps();
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
