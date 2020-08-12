<?php

namespace App\Http\Controllers;

use App\Model\Promocao;
use Illuminate\Http\Request;
use App\Http\Resources\Promocao\PromocaoResource; 
use App\Http\Resources\Promocao\PromocaoCollection;
use App\Repositories\PromocaoRepository;

/**
 * PromocaoController
 */
class PromocaoController extends Controller
{

    protected $promocao;
  
    /**
     * __construct
     *
     * @param  mixed $promocao
     * @return void
     */
    public function __construct(PromocaoRepository $promocao)
    {
        $this->promocao = $promocao;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PromocaoCollection::collection($this->promocao->all());
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
        return response()->json($this->promocao->save($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function show(Promocao $promoco)
    {
        //
        return new PromocaoResource($this->promocao->get($promoco->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocao $promoco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocao $promoco)
    {
        //
        return response()->json($this->promocao->update($promoco->id, $request));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocao $promoco)
    {
        //
        return response()->json($this->promocao->delete($promoco->id));
    }
    
    /**
     * promocaoAtiva
     *
     * @param  mixed $opcao
     * @return void
     */
    public function promocaoAtiva(String $opcao)
    {
        return PromocaoCollection::collection($this->promocao->promocaoAtiva($opcao));
    }
    
}