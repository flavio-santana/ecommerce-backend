<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pedido')->create('forma_pagamentos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->char('nome',30);

            $table->char('agencia',10);

            $table->char('conta_bancaria',15);

            $table->enum('ativo', ['Nao', 'Sim']);

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
        Schema::connection('mysql_pedido')->dropIfExists('forma_pagamentos');
    }
}
