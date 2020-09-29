<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Endereco;
use App\Model\Cliente;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [
        //

        'cliente_id' => function (){

            return Cliente::all()->random();
            
        },

        'logradouro' => $faker->streetAddress,
        
        'complemento' => $faker->secondaryAddress,
        
        'cep' => $faker->numerify('#####-###'), // 36572-258',

        'bairro' => $faker->state,

        'cidade' => $faker->city,

        'uf' => $faker->stateAbbr,

        'ativo' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});
