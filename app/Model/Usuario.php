<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = array(
        'id', 
        'nome',  
        'data_nascimento', 
        'cpf', 
        'email', 
        'telefone', 
        'whatsApp', 
        'genero',
        'endereco',
        'complemento',
        'cep',
        'bairro',
        'cidade',
        'uf',
    );
}
