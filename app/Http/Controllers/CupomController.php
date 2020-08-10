<?php

namespace App\Http\Controllers;

use App\Model\Cupom;
use Illuminate\Http\Request;
use App\Http\Resources\Cupom\CupomCollection;
use App\Http\Resources\Cupom\CupomResource;
use App\Repositories\CupomRepository;
use App\Repositories\PedidoRepository;

/**
 * CupomController
 */
class CupomController extends Controller
{

    protected $cupom;

        
    /**
     * __construct
     *
     * @param  mixed $variacao
     * @return void
     */
    public function __construct(CupomRepository $cupom)
    {
        $this->cupom = $cupom;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CupomCollection::collection($this->cupom->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return compose()->json('store');
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
        return response()->json($this->cupom->save($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Cupom  $cupom
     * @return \Illuminate\Http\Response
     */
    public function show(Cupom $cupon)
    {
        //
        return new CupomResource($this->cupom->get($cupon->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cupom  $cupom
     * @return \Illuminate\Http\Response
     */
    public function edit(Cupom $cupom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cupom  $cupom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cupom $cupon)
    {
        //
        return response()->json($this->cupom->update($cupon->id, $request));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cupom  $cupom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupom $cupon, PedidoRepository $pedidoRepository)
    {
        
        $return = $pedidoRepository->pedidoPorCupom($cupon->id);
        
        if($return->count() > 0 )
            return response()->json(
                $data=[
                    'status'=>'0',
                    'msg'=>'fail'
                ]
            );
        else 
            return  $this->cupom->delete($cupon->id);
        
    }
}