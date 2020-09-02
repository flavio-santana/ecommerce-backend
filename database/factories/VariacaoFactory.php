<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Variacao;
use App\Model\Produto;
use Faker\Generator as Faker;

$factory->define(Variacao::class, function (Faker $faker) {
    return [
        //

        'produto_id' => function (){

            return Produto::all()->random();
            
        },

        'variacao' => function (){

            return Produto::all()->random();
            
        },

        'descricao' => $faker->randomElement($array = array ('300ml', '500ml', '1l')),

        'ordem' => $faker->randomDigitNotNull,
    ];
});