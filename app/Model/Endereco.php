<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Usuario; 

/**
 * Endereco
 */
class Endereco extends Model
{
    //
    protected $fillable = array(
        'usuario_id', 'logradouro', 'complemento', 'cep', 'bairro', 'cidade', 'uf', 'ativo', 
    );
    
    /**
     * usuario
     *
     * @return void
     */
    public function usuario()
    {
        $this->belongsTo(Usuario::class);
    }
}