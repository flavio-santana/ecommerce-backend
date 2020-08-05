<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CreatePedidosTable
 */
class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('usuario_id')->unsigned()->index()
                ->foreign('usuario_id')->references('id')
                ->on('usuario')->onUpdate('cascade');

            $table->integer('endereco_id')->unsigned()->index()
                ->foreign('endereco_id')->references('id')
                ->on('endereco')->onUpdate('cascade');   
            
            $table->dateTime('data_pedido');

            $table->dateTime('data_pagamento')->nullable();    

            $table->enum('pagamento_realizado', ['Nao', 'Sim']);   
            
            $table->decimal('valor_frete', 5, 2);

            $table->string('cupom_desconto', 30);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
