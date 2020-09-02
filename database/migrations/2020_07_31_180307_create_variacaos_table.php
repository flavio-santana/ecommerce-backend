<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variacaos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('produto_id')->unsigned()->index()
                ->foreign('produto_id')->references('id')
                ->on('produto')->onUpdate('cascade');

            $table->integer('variacao')->unsigned()->index()
            ->foreign('variacao')->references('id')
            ->on('produto')->onUpdate('cascade');   

            $table->char('descricao',10);
            
            $table->integer('ordem');

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
        Schema::dropIfExists('variacaos');
    }
}