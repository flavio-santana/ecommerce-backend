<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaPagamentoParcelamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pedido')->create('forma_pagamento_parcelamentos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('forma_pagamento_id')->unsigned()->index()
            ->foreign('forma_pagamento_id')->references('id')
            ->on('forma_pagamento')->onUpdate('cascade');

            $table->decimal('valor_minimo', 5, 2);

            $table->integer('numero_parcelas');
            
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
        Schema::connection('mysql_pedido')->dropIfExists('forma_pagamento_parcelamentos');
    }
}
