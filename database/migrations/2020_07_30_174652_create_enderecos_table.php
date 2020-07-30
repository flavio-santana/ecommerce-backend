<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('usuario_id')->unsigned()->index()
                ->foreign('usuario_id')->references('id')
                ->on('usuario')->onUpdate('cascade');
            
            $table->char('logradouro',100);

            $table->char('complemento',30);

            $table->char('cep',10);

            $table->char('bairro',100);

            $table->char('cidade',100);

            $table->char('uf',2);

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
        Schema::dropIfExists('enderecos');
    }
}
