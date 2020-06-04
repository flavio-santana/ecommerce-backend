<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('codigo');

            $table->string('codigo_barras',100);
            
            $table->string('identificador_url',100);
            
            $table->char('nome',100);     
            
            $table->text('descricao',500);
            
            $table->char('palavras_chave',255);
            
            $table->char('titulo_para_seo',60);
            
            $table->text('descricao_para_seo',320);
            
            $table->decimal('preco', 5, 3);
            
            $table->decimal('preco_promocional', 5, 3);
            
            $table->decimal('peso', 5, 3);
            
            $table->decimal('altura', 5, 3);
            
            $table->decimal('largura', 5, 3);
            
            $table->decimal('comprimento', 5, 3);
            
            $table->integer('estoque');
            
            $table->enum('exibir_na_loja', ['Sim', 'Nao']);

            $table->enum('frete_gratis', ['Sim', 'Nao']);
            
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
        Schema::dropIfExists('produtos');
    }
}
