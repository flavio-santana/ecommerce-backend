<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FormaPagamentoParcelamento;
use App\Model\FormaPagamento;
use Faker\Generator as Faker;

$factory->define(FormaPagamentoParcelamento::class, function (Faker $faker) {
    return [

        //
        'forma_pagamento_id' => function (){

            return FormaPagamento::all()->random();

        },

        'valor_minimo' =>  $faker->randomFloat($nbMaxDecimals = 2, $min = 150, $max = 200),

        'numero_parcelas' =>  $faker->randomDigit,
        
        'ativo' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});
