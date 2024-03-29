<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Cliente; 

/**
 * Endereco
 */
class Endereco extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_cliente';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = array(
        'cliente_id', 'logradouro', 'complemento', 'cep', 'bairro', 'cidade', 'uf', 'ativo', 
    );
    
    /**
     * usuario
     *
     * @return void
     */
    public function usuario()
    {
        $this->belongsTo(Cliente::class);
    }
}