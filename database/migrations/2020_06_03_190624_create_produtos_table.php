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
            
            $table->integer('linha_id')->unsigned()->index()
                ->foreign('linha_id')->references('id')
                ->on('linhas')->onUpdate('cascade');
            
            $table->integer('sku');

            $table->string('codigo_barras',100);
            
            $table->string('identificador_url',100);
            
            $table->char('nome',100);     
            
            $table->text('descricao',500);
            
            $table->text('palavras_chave',500);
            
            $table->char('titulo_para_seo',100);
            
            $table->text('descricao_para_seo',320);
            
            $table->decimal('preco', 5, 2);
            
            $table->decimal('peso', 5, 3);
            
            $table->decimal('altura', 5, 3);
            
            $table->decimal('largura', 5, 3);
            
            $table->decimal('comprimento', 5, 3);
            
            $table->integer('estoque');

            $table->integer('ordem');
            
            $table->enum('frete_gratis', ['Nao', 'Sim']);

            $table->enum('lancamento', ['Nao', 'Sim']);
            
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
        Schema::dropIfExists('produtos');
    }
}
