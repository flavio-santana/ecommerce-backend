<?php

namespace App\Http\Controllers;

use App\Model\TipoCabelo;
use Illuminate\Http\Request;
use App\Repositories\TipoCabeloRepository;
use App\Http\Resources\TipoCabelo\TipoCabeloResource;
use App\Http\Resources\TipoCabelo\TipoCabeloCollection;

class TipoCabeloController extends Controller
{

    protected $tipoCabelo;

    /**
     * ProdutoController constructor
     * 
     * @param TipoCabeloRepository $tipoCabelo
     */
    public function __construct(TipoCabeloRepository $tipoCabelo)
    {
        $this->tipoCabelo = $tipoCabelo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return response()->json('tipos de cabelos');
        return TipoCabeloCollection::collection($this->tipoCabelo->all());
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
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function show(TipoCabelo $tipos_cabelo)
    {
        
        //
        return new TipoCabeloResource($this->tipoCabelo->get($tipos_cabelo->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function edit(Linha $linha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linha $linha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linha $linha)
    {
        //
    }

    public function exibirNaLoja(String $opcao)
    {
        //
        return response()->json($this->tipoCabelo->exibirNaLoja($opcao)); 
    }
}