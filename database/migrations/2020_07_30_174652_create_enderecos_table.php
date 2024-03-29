<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CreateEnderecosTable
 */
class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::connection('mysql_cliente')->create('enderecos', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('cliente_id')->unsigned()->index()
                ->foreign('cliente_id')->references('id')
                ->on('cliente')->onUpdate('cascade');
            
            $table->char('logradouro',100);

            $table->char('complemento',30)->nullable();

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
        Schema::connection('mysql_cliente')->dropIfExists('enderecos');
    }
}
