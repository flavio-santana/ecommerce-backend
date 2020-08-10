<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Promocao;

/**
 * CupomRepository
 */
class PromocaoRepository implements PromocaoRepositoryInterface
{
        
    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return Promocao::find($id);
    }   
        
    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        return Promocao::all();
    }
    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        
        $answer = Promocao::destroy($id); 

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
        $answer = Promocao::find($id)->update($data);

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

        
        $cupom = Promocao::create($data);

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
        return Promocao::paginate($take);
    }
    
    /**
     * promocaoAtiva
     *
     * @return void
     */
    public function promocaoAtiva(String $opcao)
    {
        return Promocao::where('ativo','=',$opcao)->get();
    }

}