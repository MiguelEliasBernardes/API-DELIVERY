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
        Schema::create('produtos_pedidos', function (Blueprint $table) {
            $table->id('codigo_produto_ped');
            $table->integer('quantidade_prod');
            $table->double('total_prod');
            $table->foreignId('id_pedido')->references('pedidos')->on('codigo_pedido');
            $table->foreignId('id_produto')->references('produto')->on('codigo_prod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_pedidos');
    }
};