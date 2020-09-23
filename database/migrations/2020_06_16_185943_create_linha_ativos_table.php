<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinhaAtivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('linha_ativos', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('linha_id')->unsigned()->index()
                ->foreign('linha_id')->references('id')
                ->on('linhas')->onDelete('cascade');
            
            $table->integer('ativo_id')->unsigned()->index()
                ->foreign('ativo_id')->references('id')
                ->on('ativos')->onDelete('cascade');

            $table->enum('exibir_na_loja', [0, 1]);

            $table->timestamps();
            
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        #Schema::dropIfExists('linha_ativos');
    }
}
