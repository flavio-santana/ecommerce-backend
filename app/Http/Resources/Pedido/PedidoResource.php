<?php

namespace App\Http\Resources\Pedido;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * PedidoResource
 */
class PedidoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            
            'usuario_id'          => $this->usuario_id,
            'endereco_id'         => $this->endereco_id,
            'data_pedido'         => $this->data_pedido,
            'data_pagamento'      => $this->data_pagamento,
            'valor_frete'         => $this->valor_frete,
            'pagamento_realizado' => $this->pagamento_realizado,
            'valor_frete'         => $this->valor_frete,
            
            'ref1' => [
                'href'  => route('pedidos.index'),
            ],

            'ref2' => [
                'href'  => route('item.pedidos', $this->id),
            ],

        ];
    }
}