<?php

namespace App\Model;

use App\Model\TipoCabelo;

use Illuminate\Database\Eloquent\Model;

class LinhaRecomendada extends Model
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
        'tipo_cabelo_id', 
        'linha_id', 
        'created_at', 
        'updated_at',
    );

    /**
     * 
     */
    public function cabelos()
    {
        return $this->belongsToMany(TipoCabelo::class);
    }
}
