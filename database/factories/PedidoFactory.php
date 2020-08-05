<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Pedido;
use App\Model\Usuario;
use App\Model\Endereco;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        //
        'usuario_id' => function (){

            return Usuario::all()->random();
            
        },

        'endereco_id' => function (){

            return Endereco::all()->random();
            
        },

        'data_pedido' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'data_pagamento' => $faker->date($format = 'Y-m-d', $max = 'now'),

        //'cupom_desconto' => $faker->numerify('HASKELL#####'),

        'valor_frete' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),

        'pagamento_realizado' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});