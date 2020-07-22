<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('linha_id')->unsigned()->index()
                ->foreign('linha_id')->references('id')
                ->on('linhas')->onDelete('cascade');
            
            $table->integer('produto_id')->unsigned()->index()
                ->foreign('produto_id')->references('id')
                ->on('produtos')->onDelete('cascade');

            $table->enum('exibir_na_loja', [0, 1]);

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
        Schema::dropIfExists('associados');
    }
}
