<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        //

        'nome' => $faker->name,

        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),

        //'cpf' => $faker->cpf(false),
        'cpf' => $faker->numerify('###########'),

        'email' => $faker->email,
        
        'telefone' => $faker->numerify('(##)##### - ####'), // (31)97135 - 5434,
        
        'whatsapp' => $faker->randomElement($array = array ('Nao', 'Sim')),
        
        'genero' => $faker->randomElement($array = array ('F', 'M')),

        'endereco' => $faker->streetAddress,
        
        'complemento' => $faker->secondaryAddress,
        
        'cep' => $faker->numerify('#####-###'), // 36572-258',

        'bairro' => $faker->state,

        'cidade' => $faker->city,

        'uf' => $faker->stateAbbr,
    ];
});
