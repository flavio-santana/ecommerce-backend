<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Cupom
 */
class Cupom extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_pedido';

    //
    protected $fillable = array(
        'id', 'descricao', 'valor_minino_compra', 'porcentagem_desconto', 'valor_desconto', 
        'data_inicio', 'data_termino', 'tipo_cupom', 'ativo',
    );
}