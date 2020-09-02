<?php

namespace App\Http\Resources\ItemPedidos;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * ItemPedidosResource
 */
class ItemPedidosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
