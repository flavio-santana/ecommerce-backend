<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Pedidos; 

/**
 * ItemPedido
 */
class ItemPedido extends Model
{
    //
    protected $fillable = array(
        'id', 'item_pedidos', 'pedido_id', 'produto_id', 'promocao_id', 'qtde_unitaria', 'valor_unitario' 
    );
    
    /**
     * pedido
     *
     * @return void
     */
    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}