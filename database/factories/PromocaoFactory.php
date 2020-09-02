<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Promocao;
use App\Model\Produto;
use Faker\Generator as Faker;

$factory->define(Promocao::class, function (Faker $faker) {
    return [
        //

        'produto_id' => function (){

            return Produto::all()->random();
            
        },

        'data_inicio' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'data_termino' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'preco_promocional' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),

        'ativo' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});