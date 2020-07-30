<?php

namespace App\Model;

use App\Model\Enderecos; 

use Illuminate\Database\Eloquent\Model;

/**
 * Usuario
 */
class Usuario extends Model
{
    //
    protected $fillable = array(
        'id', 'nome', 'data_nascimento', 'cpf', 'email', 'telefone', 'whatsapp', 'genero', 'origem', 'ativo'
    );

    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}