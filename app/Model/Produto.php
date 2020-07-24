<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = array(
        'id', 
        'codigo', 
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
}
