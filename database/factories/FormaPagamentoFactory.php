<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\FormaPagamento;
use Faker\Generator as Faker;

$factory->define(FormaPagamento::class, function (Faker $faker) {
    return [
        //

        'nome' => $faker->name,

        'agencia' => $faker->bankRoutingNumber,

        'conta_bancaria' => $faker->bankAccountNumber,

        'ativo' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});
