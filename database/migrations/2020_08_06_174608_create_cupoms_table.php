<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CreateCupomsTable
 */
class CreateCupomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_pedido')->create('cupoms', function (Blueprint $table) {
            
            $table->increments('id');

            $table->text('descricao',100);

            $table->decimal('valor_minino_compra', 5, 2);

            $table->decimal('porcentagem_desconto', 5, 2);

            $table->decimal('valor_desconto', 5, 2);

            $table->dateTime('data_inicio');

            $table->dateTime('data_termino')->nullable();

            $table->enum('tipo_cupom', ['Porcentagem', 'ValorFixo']);

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
        Schema::connection('mysql_pedido')->dropIfExists('cupoms');
    }
}