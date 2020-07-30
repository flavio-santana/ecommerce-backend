<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use Illuminate\Http\Request;
use App\Http\Resources\Usuario\UsuarioCollection;
use App\Http\Resources\Usuario\UsuarioResource;
use App\Repositories\UsuarioRepository;


class UsuarioController extends Controller
{

    protected $usuario;

    /**
     * ProdutoController constructor
     * 
     * @param ProdutoRepository $produto
     */
    public function __construct(UsuarioRepository $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return UsuarioCollection::collection($this->usuario->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
        return new UsuarioResource($this->usuario->get($usuario->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
        //dd($request);
        //return response()->json($request);
        //return response()->json($usuario);

        //$obj = json_decode($request);

        //dd($obj['nome']]);
        //print $request->{'nome'};

        $data = [
            'nome' => $request->{'nome'},

            'data_nascimento' => $request->{'data_nascimento'},
            
            'cpf' => $request->{'cpf'},
            
            'email' => $request->{'email'},
            
            'telefone' => $request->{'telefone'},
            
            'whatsapp' => $request->{'whatsapp'},
            
            'genero' => $request->{'genero'},

            'endereco' => $request->{'endereco'},

            'complemento' => $request->{'complemento'},
            
            'bairro' => $request->{'bairro'},
            
            'cep' => $request->{'cep'},

            'cidade' => $request->{'cidade'},
            
            'uf' => $request->{'uf'},

            'origem' => $request->{'origem'},

            'publicado' => $request->{'publicado'}
        ];

        //
        return response()->json($this->usuario->update($usuario->id, $data)); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
        $data = $this->usuario->delete($usuario->id); 
        
        return response()->json($data);
    }
}