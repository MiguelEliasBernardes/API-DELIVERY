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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('codigo_cliente');
            $table->string('nome_cliente',200);
            $table->string('rua_cliente', 200);
            $table->integer('numero_estabelecimento');
            $table->string('bairro', 64);
            $table->string('referencia',255);
            $table->string('telefone',24);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
