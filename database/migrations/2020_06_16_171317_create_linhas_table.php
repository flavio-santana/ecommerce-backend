<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('linhas', function (Blueprint $table) {
            
            $table->increments('linha_id');
            
            $table->integer('recomendado_id')->unsigned()->index()
                ->foreign('recomendado_id')->references('id')
                ->on('recomendados')->onDelete('cascade');

            $table->string('identificador_url',100);
            
            $table->char('nome',100);  

            $table->text('descricao',500);
            
            $table->char('principal_funcao',255);
            
            $table->char('titulo_para_seo',60);
            
            $table->text('descricao_para_seo',320);

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
        Schema::dropIfExists('linhas');
    }
}