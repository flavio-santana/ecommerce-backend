<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->increments('id');

            $table->char('nome',100);

            $table->char('data_nascimento',10);

            $table->char('cpf',11);

            $table->char('email',100);

            $table->char('telefone',100);

            $table->enum('whatsapp', ['Nao', 'Sim']);

            $table->enum('genero', ['F', 'M']);

            $table->char('origem',30);

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
        Schema::dropIfExists('usuarios');
    }
}
