<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('paginas', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('identificador_url',100);
            
            $table->char('titulo',100);     
            
            $table->text('descricao',500);
            
            $table->char('palavras_chave',255);
            
            $table->char('titulo_para_seo',60);
            
            $table->text('descricao_para_seo',320);
     
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
        Schema::dropIfExists('paginas');
    }
}
