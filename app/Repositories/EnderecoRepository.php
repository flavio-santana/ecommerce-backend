<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Endereco;

/**
 * 
 */
class EnderecoRepository implements UsuarioRepositoryInterface
{
    
    /**
     * Recebe uma linha por seu ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return Endereco::find($id);
    }   
    
    /**
     * Recebe todos as linhas.
     *
     * @return mixed
     */
    public function all()
    {
        return Endereco::all();
    }

    /**
     * Deleta uma linha
     *
     * @param int
     */
    public function delete($id)
    {
        $answer=Endereco::destroy($id); 

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
    public function update($id, $json)
    {
        // json to array
        $data = [
            
            'logradouro' => $json->{'logradouro'},

            'complemento' => $json->{'complemento'},
            
            'cep' => $json->{'cep'},
            
            'bairro' => $json->{'bairro'},
            
            'cidade' => $json->{'cidade'},
            
            'uf' => $json->{'uf'},
            
            'ativo' => $json->{'ativo'},

        ];
        
        //
        $answer = Endereco::find($id)->update($data);

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

            'nome' => $json->{'nome'},

            'data_nascimento' => $json->{'data_nascimento'},
            
            'cpf' => $json->{'cpf'},
            
            'email' => $json->{'email'},
            
            'telefone' => $json->{'telefone'},
            
            'whatsapp' => $json->{'whatsapp'},
            
            'genero' => $json->{'genero'},

            'endereco' => $json->{'endereco'},

            'complemento' => $json->{'complemento'},
            
            'bairro' => $json->{'bairro'},
            
            'cep' => $json->{'cep'},

            'cidade' => $json->{'cidade'},
            
            'uf' => $json->{'uf'},

            'origem' => $json->{'origem'},

            'publicado' => $json->{'publicado'}
        ];

        $user = Endereco::create($data);

        if ($user){
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
     * 
     */
    public function paginate($take=0)
    {
        return Endereco::paginate($take);
    }

}