<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinhaRecomendadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_produto')->create('linha_recomendadas', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('tipo_cabelo_id')->unsigned()->index()
                ->foreign('tipo_cabelo_id')->references('id')
                ->on('tipo_cabelos')->onUpdate('cascade');
                
            $table->integer('linha_id')->unsigned()->index()
                ->foreign('linha_id')->references('id')
                ->on('linhas')->onUpdate('cascade');

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
        Schema::connection('mysql_produto')->dropIfExists('linha_recomendadas');
    }
}
