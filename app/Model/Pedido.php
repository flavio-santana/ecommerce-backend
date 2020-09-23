<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ItemPedido; 

/**
 * Pedido
 */
class Pedido extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_pedido';

    //
    protected $fillable = array(
        'id', 'cliente_id', 'endereco_id', 'pagamento_realizado', 
    );
    
    /**
     * itemPedidos
     *
     * @return void
     */
    public function itens()
    {
        return $this->hasMany(ItemPedido::class);
    }
}
