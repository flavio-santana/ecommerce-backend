<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Produto; 

class Linha extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_produto';

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
        'ativo',
    );

    /**
     * 
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
