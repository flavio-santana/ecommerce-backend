<?php

namespace App\Http\Resources\Linha;

use Illuminate\Http\Resources\Json\JsonResource;

class LinhaCollection extends JsonResource
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
            'nome'             => $this->nome,
            'descricao'        => $this->descricao,
            'principal_funcao' => $this->principal_funcao,
            'produtos'         => $this->produtos->count() > 0 ? $this->produtos->count() : 'Está linha não possui produtos',
            
            'ref' => [
                'href'  => route('linhas.show',$this->id),
            ],
              
        ];
    }
}