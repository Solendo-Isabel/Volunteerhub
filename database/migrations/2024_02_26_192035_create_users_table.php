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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('vc_pr_nome');
            $table->string('vc_nome_meio');
            $table->string('vc_ult_nome');
            $table->string('BI');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('provincia');
            $table->string('municipio');
            $table->string('genero');
            $table->string('password');
            $table->unsignedBigInteger('it_id_org');
            $table->string('imagem');
            $table->foreign('it_id_org')->references('id')->on('organizacoes')->onUptade('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
