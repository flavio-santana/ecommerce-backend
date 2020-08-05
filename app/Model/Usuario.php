<?php

namespace App\Model;

use App\Model\Enderecos; 
use App\Model\Pedido; 

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
    
    /**
     * enderecos
     *
     * @return void
     */
    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
    
    /**
     * pedidos
     *
     * @return void
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}