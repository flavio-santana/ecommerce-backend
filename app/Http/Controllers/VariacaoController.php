<?php

namespace App\Http\Controllers;

use App\Model\Variacao;
use Illuminate\Http\Request;
use App\Http\Resources\Variacao\VariacaoCollection;
use App\Http\Resources\Variacao\VariacaoResource;
use App\Repositories\VariacaoRepository;

/**
 * VariacaoController
 */
class VariacaoController extends Controller
{

    protected $variacao;

        
    /**
     * __construct
     *
     * @param  mixed $variacao
     * @return void
     */
    public function __construct(VariacaoRepository $variacao)
    {
        $this->variacao = $variacao;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return VariacaoCollection::collection($this->variacao->all()->sortBy('produto_id')); 
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
     * @param  \App\Model\Variacao  $variacao
     * @return \Illuminate\Http\Response
     */
    public function show(Variacao $variaco)
    {
        //
        return new VariacaoResource($this->variacao->get($variaco->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Variacao  $variacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Variacao $variacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Variacao  $variacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variacao $variacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Variacao  $variacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variacao $variacao)
    {
        //
    }
}