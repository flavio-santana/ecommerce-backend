<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Cupom;

/**
 * CupomRepository
 */
class CupomRepository implements CupomRepositoryInterface
{
        
    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return Cupom::find($id);
    }   
        
    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        return Cupom::all();
    }
    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        
        $answer = Cupom::destroy($id); 

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
     * update
     *
     * @param  mixed $id
     * @param  mixed $json
     * @return void
     */
    public function update($id, $json)
    {
        // json to array
        $data = [
            
            'descricao' => $json->{'descricao'},

            'valor_minino_compra' => $json->{'valor_minino_compra'},
            
            'porcentagem_desconto' => $json->{'porcentagem_desconto'},
            
            'valor_desconto' => $json->{'valor_desconto'},
            
            'data_inicio' => $json->{'data_inicio'},
            
            'data_termino' => $json->{'data_termino'},

            'tipo_cupom' => $json->{'tipo_cupom'},
            
            'ativo' => $json->{'ativo'},

        ];
        
        //
        $answer = Cupom::find($id)->update($data);

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
     * save
     *
     * @param  mixed $json
     * @return void
     */
    public function save($json)
    {

       // json to array
       $data = [
            
            'descricao' => $json->{'descricao'},

            'valor_minino_compra' => $json->{'valor_minino_compra'},
            
            'porcentagem_desconto' => $json->{'porcentagem_desconto'},
            
            'valor_desconto' => $json->{'valor_desconto'},
            
            'data_inicio' => $json->{'data_inicio'},
            
            'data_termino' => $json->{'data_termino'},

            'tipo_cupom' => $json->{'tipo_cupom'},
            
            'ativo' => $json->{'ativo'},

        ];

        
        $cupom = Cupom::create($data);

        if ($cupom){
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
     * paginate
     *
     * @param  mixed $take
     * @return void
     */
    public function paginate($take=0)
    {
        return Cupom::paginate($take);
    }

}