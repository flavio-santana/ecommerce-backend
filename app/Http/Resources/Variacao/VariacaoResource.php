<?php

namespace App\Http\Resources\Variacao;

use Illuminate\Http\Resources\Json\JsonResource;

class VariacaoResource extends JsonResource
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
            'id'         => $this->id,
            'produto_id' => $this->produto_id,
            'variacao'   => $this->variacao,
            'descricao'  => $this->descricao,
            'ordem'      => $this->ordem,
            
            'ref' => [
                'href'  => route('variacao.produto', $this->produto_id),
            ],

            'ref2' => [
                'href'  => route('variacoes.index'),
            ]
              
        ];
    }
}
