<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CreateItemPedidosTable
 */
class CreateItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pedidos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('pedido_id')->unsigned()->index()
                ->foreign('pedido_id')->references('id')
                ->on('pedido')->onUpdate('cascade');

            $table->integer('produto_id')->unsigned()->index()
                ->foreign('produto_id')->references('id')
                ->on('produto')->onUpdate('cascade');

            $table->integer('qtde_unitaria');    

            $table->decimal('valor_unitario', 5, 2);

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
        Schema::dropIfExists('item_pedidos');
    }
}
