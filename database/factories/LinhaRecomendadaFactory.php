<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\LinhaRecomendada;
use App\Model\Linha;
use App\Model\TipoCabelo;
use Faker\Generator as Faker;

$factory->define(LinhaRecomendada::class, function (Faker $faker) {
    return [
        //

        'tipo_cabelo_id' => function (){

            return TipoCabelo::all()->random();
            
        },

        'linha_id' => function (){

            return Linha::all()->random();
            
        },
    ];
});
