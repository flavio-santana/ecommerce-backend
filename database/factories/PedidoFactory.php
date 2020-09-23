<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Pedido;
use App\Model\Cliente;
use App\Model\Endereco;
use App\Model\Cupom;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        //
        'cliente_id' => function (){

            return Cliente::all()->random();
            
        },

        'endereco_id' => function (){

            return Endereco::all()->random();
            
        },

        'cupom_id' => function (){

            return Cupom::all()->random();
            
        },

        'data_pedido' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'data_pagamento' => $faker->date($format = 'Y-m-d', $max = 'now'),

        'valor_frete' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),

        'pagamento_realizado' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});