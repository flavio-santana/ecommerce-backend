<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = array(
        'id', 'nome', 'data_nascimento', 'cpf', 'email', 'telefone', 'whatsapp', 'genero', 'origem', 'ativo'
    );

    /**
     * enderecos
     *
     * @return void
     */
    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}
