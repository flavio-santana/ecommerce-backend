<?php

namespace App\Http\Resources\ItemPedidos;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * ItemPedidosCollection
 */
class ItemPedidosCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
    
            'id'             => $this->id,
            'pedido_id'      => $this->pedido_id,
            'produto_id'     => $this->produto_id,
            'qtde_unitaria'  => $this->qtde_unitaria,
            'valor_unitario' => $this->valor_unitario,
    
            'ref1' => [
                'href'  => route('pedidos.show', $this->pedido_id),
            ],

        ];
    }
}