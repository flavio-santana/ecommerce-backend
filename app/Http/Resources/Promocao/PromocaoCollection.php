<?php

namespace App\Http\Resources\Promocao;

use Illuminate\Http\Resources\Json\JsonResource;

class PromocaoCollection extends JsonResource
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
            'produto_id'        => $this->produto_id,
            'preco_promocional' => $this->preco_promocional,
            'data_inicio'       => $this->data_inicio,
            'data_termino'      => $this->data_termino,

            'ref1' => [
                'href'  => route('promocoes.show', $this->id),
            ],

        ];
    }
}
