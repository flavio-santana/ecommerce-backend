<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Pedido
 */
class Pedido extends Model
{
    //
    protected $fillable = array(
        'id', 'usuario_id', 'endereco_id', 'pagamento_realizado', 
    );
}
