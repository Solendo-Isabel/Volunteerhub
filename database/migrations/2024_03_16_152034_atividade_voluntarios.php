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
        Schema::create('atividade_voluntarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_atividade');
            $table->unsignedBigInteger('id_voluntario');
            $table->foreign('id_atividade')->references('id')->on('atividades')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_voluntario')->references('id')->on('voluntarios')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividade_voluntarios');
    }
};
