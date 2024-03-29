<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * FormaPagamento
 */
class FormaPagamento extends Model
{
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_pedido';

    //
    protected $fillable = array(
        'id', 'nome', 'agencia', 'conta_bancaria', 'ativo' 
    );
}
