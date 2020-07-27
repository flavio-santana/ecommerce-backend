<?php

namespace App\Http\Resources\Produto;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
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
            'sku'                => $this->sku,
            'codigo_barras'      => $this->codigo_barras,
            'identificador_url'  => $this->identificador_url,
            'nome'               => $this->nome,
            'descricao'          => $this->descricao,
            'palavras_chave'     => $this->palavras_chave,
            'titulo_para_seo'    => $this->titulo_para_seo,
            'descricao_para_seo' => $this->descricao_para_seo,
            'preco'              => $this->preco,
            'preco_promocional'  => $this->preco_promocional,
            'peso'               => $this->peso,
            'altura'             => $this->altura,
            'largura'            => $this->largura,
            'comprimento'        => $this->comprimento,
            'estoque'            => $this->estoque,
            'exibir_na_loja'     => $this->exibir_na_loja,
            'frete_gratis'       => $this->frete_gratis,
              
            'ref1' => [
                'href'  => route('produtos.index'),
            ],  

            'ref2' => [
                'href'  => route('produtos',$this->linha_id),
            ],
        ];
    }
}
