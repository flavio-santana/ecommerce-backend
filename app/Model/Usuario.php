<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = array(
        'id', 'nome', 'data_nascimento', 'cpf', 'email', 'telefone', 'whatsapp', 'genero', 'endereco', 'complemento', 'cep', 'bairro', 
        'cidade', 'uf', 'origem', 'ativo','origem','publicado'
    );
}