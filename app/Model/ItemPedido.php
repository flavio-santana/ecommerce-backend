<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    //
    protected $fillable = array(
        'id', 'item_pedidos', 'pedido_id', 'produto_id', 'qtde_unitaria', 'valor_unitario' 
    );
}
