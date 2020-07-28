<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCabelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_cabelos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string('identificador_url',100);
            
            $table->char('nome',100);  

            $table->text('descricao',500);
            
            $table->char('titulo_para_seo',60);

            $table->text('palavras_chave',500);
            
            $table->text('descricao_para_seo',320);

            $table->enum('exibir_na_loja', ['Nao', 'Sim']);


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
        Schema::dropIfExists('tipo_cabelos');
    }
}
