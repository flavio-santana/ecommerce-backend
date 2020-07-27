<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Produto; 

class Linha extends Model
{
    //
    protected $fillable = array(
        'id', 
        'identificador_url', 
        'nome', 
        'descricao', 
        'principal_funcao', 
        'titulo_para_seo', 
        'palavras_chave',
        'descricao_para_seo',
        'exibir_na_loja',
    );

    /**
     * 
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
