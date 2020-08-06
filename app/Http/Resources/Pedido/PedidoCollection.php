<?php

namespace App\Http\Resources\Pedido;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * PedidoCollection
 */
class PedidoCollection extends JsonResource
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
    
            'data_pedido'         => $this->data_pedido,
            'data_pagamento'      => $this->data_pagamento,
            'valor_frete'         => $this->valor_frete,
            'pagamento_realizado' => $this->pagamento_realizado,
            'valor_frete'         => $this->valor_frete,
    
            'ref1' => [
                'href'  => route('pedidos.show', $this->id),
            ],

        ];
    }
}