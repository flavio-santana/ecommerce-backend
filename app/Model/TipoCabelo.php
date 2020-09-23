<?php

namespace App\Model;

use App\Model\LinhaRecomendada; 

use Illuminate\Database\Eloquent\Model;

class TipoCabelo extends Model
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
        'palavras_chave',
        'titulo_para_seo',
        'descricao_para_seo',
        'ativo',
    );

    /*
    public function linhas()
    {
        return $this->hasMany(LinhaRecomendada::class)
            ->select(['linhas.id', 
                        'linhas.identificador_url', 
                        'linhas.nome', 
                        'linhas.descricao',
                        'linhas.principal_funcao',
                        'linhas.titulo_para_seo',
                        'linhas.palavras_chave',
                        'linhas.descricao_para_seo',
                        'linhas.created_at',
                        'linhas.updated_at'])
            ->join('linhas','linha_recomendadas.linha_id','linhas.id');
    }
    */

}