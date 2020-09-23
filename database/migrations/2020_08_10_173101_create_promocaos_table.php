<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_produto')->create('promocaos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('produto_id')->unsigned()->index()
                ->foreign('produto_id')->references('id')
                ->on('produto')->onUpdate('cascade');

            $table->decimal('preco_promocional', 5, 2);

            $table->dateTime('data_inicio');

            $table->dateTime('data_termino');    

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
        Schema::connection('mysql_produto')->dropIfExists('promocaos');
    }
}
