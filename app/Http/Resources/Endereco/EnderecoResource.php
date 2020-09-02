<?php

namespace App\Http\Resources\Endereco;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * EnderecoResource
 */
class EnderecoResource extends JsonResource
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
            'id'          => $this->id,
            'usuario_id'  => $this->usuario_id,
            'logradouro'  => $this->logradouro,
            'complemento' => $this->complemento,
            'cep'         => $this->cep,
            'bairro'      => $this->bairro,
            'cidade'      => $this->cidade,
            'uf'          => $this->uf,  
            'ativo'       => $this->ativo,  
            
            'ref1' => [
                'href'  => route('enderecos.index'),
            ],
        ];
    }
}
