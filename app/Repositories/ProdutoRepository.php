<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Produto;

class ProdutoRepository extends BaseRepository
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
    
    /**
     * 
     */
    public function find($id)
    {
        return $this->post->find($id);
    }
    
    /**
     * 
     */
    public function findBy($att, $column)
    {
        return $this->post->where($att, $column)
    }

}
