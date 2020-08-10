<?php

namespace App\Model;
use App\Model\Produto;

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