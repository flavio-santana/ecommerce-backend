<?php

namespace App\Http\Resources\Promocao;

use Illuminate\Http\Resources\Json\JsonResource;

class PromocaoResource extends JsonResource
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
            'id'                => $this->id,
            'produto_id'        => $this->produto_id,
            'preco_promocional' => $this->preco_promocional,
            'data_inicio'       => $this->data_inicio,
            'data_termino'      => $this->data_termino,
            'ativo'             => $this->ativo,
            'created_at'        => $this->data_termino,
            'updated_at'        => $this->updated_at,

            'ref1' => [
                'href'  => route('promocoes.index'),
            ],

        ];
    }
}
