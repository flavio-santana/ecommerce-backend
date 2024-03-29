<?php

namespace App\Model;
use App\Model\Produto;

use Illuminate\Database\Eloquent\Model;

/**
 * Promocao
 */
class Promocao extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_produto';

    //
    protected $fillable = array(
        'id', 'produto_id', 'preco_promocional', 'data_inicio', 'data_termino', 'ativo',
    );
    
    /**
     * produto
     *
     * @return void
     */
    public function produto()
    {
        $this->belongsTo(Produto::class);
    }
    
}