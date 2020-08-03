<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Variacao extends Model
{
    //
    protected $fillable = array(
        'id', 'produto_id', 'variacao', 'descricao', 'ordem',
    );

}
