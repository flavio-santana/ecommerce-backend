<?php

namespace App\Http\Resources\FormaPagamento;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * FormaPagamentoResource
 */
class FormaPagamentoResource extends JsonResource
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
            
            'id'               => $this->id,
            'nome'             => $this->nome,
            'agencia'          => $this->nome,
            'conta_bancaria	'  => $this->descricao,
            'ativo'            => $this->ativo,
            
            'ref1' => [
                #'href'  => route('linhas.index'),
            ],
        ];
    }
}
