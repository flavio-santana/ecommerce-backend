<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Promocao
 */
class Promocao extends Model
{
    //
    protected $fillable = array(
    'id', 'produto_id', 'data_inicio', 'data_termino', 'ativo',
    );
    
}
