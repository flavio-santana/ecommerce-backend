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
        Schema::connection('mysql_pedido')->create('item_pedidos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('pedido_id')->unsigned()->index()
                ->foreign('pedido_id')->references('id')
                ->on('pedido')->onUpdate('cascade');
            
            $table->integer('produto_id');

            $table->integer('promocao_id');

            /*
            $table->integer('produto_id')->unsigned()->index()
                ->foreign('produto_id')->references('id')
                ->on('produto')->onUpdate('cascade');
              
            $table->integer('promocao_id')
                ->nullable()
                ->comment('Nessa coluna irá conter o ID da promoção realizada para o produto.');
            */

            $table->decimal('preco_unitario', 5, 3)
                ->comment('Se o produto estiver em promoção, o valor armazedo deve ser o dá promoção vigente.');

            $table->integer('qtde_unitaria')
                ->comment('Neste campo será armazedo a quantidade de itens adquirido do produto.');

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
        Schema::connection('mysql_pedido')->dropIfExists('item_pedidos');
    }
}
