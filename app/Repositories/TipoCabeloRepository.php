<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\TipoCabelo;

/**
 * 
 */
class TipoCabeloRepository implements TipoCabeloRepositoryInterface
{
    
    /**
     * Recebe uma linha por seu ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return TipoCabelo::find($id);
    }   
    
    /**
     * Recebe todos as linhas.
     *
     * @return mixed
     */
    public function all()
    {
        return TipoCabelo::all();
    }

    /**
     * Deleta uma linha
     *
     * @param int
     */
    public function delete($id)
    {
        $answer=TipoCabelo::destroy($id); 

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
        TipoCabelo::find($id)->update($data);
    }
    
    /**
     * 
     */
    public function paginate($take=0)
    {
        return TipoCabelo::paginate($take);
    }
    
    /**
     * exibirNaLoja
     *
     * @param  mixed $opcao
     * @return void
     */
    public function exibirNaLoja(String $opcao)
    {
        return TipoCabelo::where('exibir_na_loja','=',$opcao)->get();
    }

}