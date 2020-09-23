<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Variacao extends Model
{
    
    /**
     * connection
     *
     * @var string
     */
    protected $connection = 'mysql_produto';

    //
    protected $fillable = array(
        'id', 'produto_id', 'variacao', 'descricao', 'ordem',
    );

}
