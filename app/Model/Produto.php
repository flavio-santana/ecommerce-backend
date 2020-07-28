<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Linha; 

class Produto extends Model
{
    //
    protected $fillable = array(
        'id', 
        'sku',  
        'codigo_barras', 
        'identificador_url', 
        'nome', 
        'descricao', 
        'palavras_chave',
        'titulo_para_seo',
        'descricao_para_seo',
        'preco',
        'preco_promocional',
        'peso',
        'altura',
        'largura',
        'comprimento',
        'estoque',
        'exibir_na_loja',
        'frete_gratis',
        'created_at',
        'updated_at',
    );

    /**
     * 
     */
    public function linha()
    {
        $this->belongsTo(Linha::class);
    }
}
