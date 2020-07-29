<?php

namespace App\Http\Resources\TipoCabelo;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoCabeloResource extends JsonResource
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
            'id'                 => $this->id,
            'identificador_url'  => $this->identificador_url,
            'nome'               => $this->nome,
            'descricao'          => $this->descricao,
            'titulo_para_seo'    => $this->titulo_para_seo,
            'palavras_chave'     => $this->palavras_chave,
            'descricao_para_seo' => $this->descricao_para_seo,  
            'exibir_na_loja'     => $this->exibir_na_loja,  
            
            'ref1' => [
                'href'  => route('tipos-cabelos.index'),
            ],

            'ref2' => [
                'href'  => route('produtos-recomendados',$this->id),
            ],
        ];   
    }
}
