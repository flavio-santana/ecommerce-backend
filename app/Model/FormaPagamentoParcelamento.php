<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * FormaPagamentoParcelamento
 */
class FormaPagamentoParcelamento extends Model
{
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_pedido';

    //
    protected $fillable = array(
        'forma_pagamento_id', 'valor_minimo', 'numero_parcelas', 'conta_bancaria', 'ativo' 
    );
}
