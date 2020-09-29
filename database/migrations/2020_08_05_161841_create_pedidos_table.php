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
        Schema::connection('mysql_pedido')->create('pedidos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('cliente_id');

            $table->integer('endereco_id');

            $table->integer('cupom_id')->unsigned()->index()
                ->foreign('cupom_id')->references('id')
                ->on('cupom')->onUpdate('cascade');    
            
            $table->dateTime('data_pedido');

            $table->dateTime('data_pagamento')->nullable();    

            $table->decimal('valor_frete', 5, 3)->nullable();

            $table->enum('pagamento_realizado', ['Nao', 'Sim']);

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
        Schema::connection('mysql_pedido')->dropIfExists('pedidos');
    }
}
