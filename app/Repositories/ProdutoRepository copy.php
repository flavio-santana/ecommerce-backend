<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Produto;

/**
 * 
 */
class ProdutoRepository implements ProdutoRepositoryInterface
{
    /**
     * 
     */
    protected $model;

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
    public function find($produto_id)
    {
        return $this->model->find($produto_id);
    }
    
    /**
     * 
     */
    public function findBy($att, $column)
    {
        return $this->model->where($att, $column);
    }

    /**
     * 
     */
    public function destroy($id)
    {
        
        $answer=$this->model->destroy($id);

        if ($answer){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        } 
        
        return $data;
    }

}
