<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Pagina;

class PaginaRepository extends BaseRepository
{
    //
    private $model;

    /**
     * 
     */
	public function __construct(Produto $model)
	{
		$this->model = $model;
	}

    /**
     * 
     */
	public function findAll()
	{
		return $this->model->all();
	}   
}
