<?php

namespace App\Http\Resources\TipoCabelo;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoCabeloCollection extends JsonResource
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
            'nome'               => $this->nome,
            'descricao'          => $this->descricao,
            //'principal_funcao'   => $this->principal_funcao,
            'ref' => [
                'href'  => route('tipos-cabelos.show',$this->id),
            ],  
        ];
    }
}
