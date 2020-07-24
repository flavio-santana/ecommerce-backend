<?php

namespace App\Http\Resources\Produto;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoCollection extends JsonResource
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
            'sku'       => $this->sku,
            'nome'      => $this->nome,
            'descricao' => $this->descricao,
            'ref' => [
                'href'  => route('produtos.show', $this->id),
            ],  
        ];
        
    }
}
