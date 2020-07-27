<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Linha;

/**
 * 
 */
class LinhaRepository implements LinhaRepositoryInterface
{
    
    /**
     * Recebe uma linha por seu ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return Linha::find($id);
    }   
    
    /**
     * Recebe todos as linhas.
     *
     * @return mixed
     */
    public function all()
    {
        return Linha::all();
    }

    /**
     * Deleta uma linha
     *
     * @param int
     */
    public function delete($id)
    {
        $answer=Linha::destroy($id); 

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

    /**
     * Updates um produto.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {
        Produto::find($id)->update($data);
    }
    
    /**
     * 
     */
    public function paginate($take=0)
    {
        return Linha::paginate($take);
    }

}