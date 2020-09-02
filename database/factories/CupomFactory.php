<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cupom;
use Faker\Generator as Faker;

$factory->define(Cupom::class, function (Faker $faker) {
    return [
        //

        'descricao' => $faker->name,

        'valor_minino_compra' => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 200),

        'porcentagem_desconto' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 30),

        'valor_desconto' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 50),
        
        'data_inicio' => $faker->date($format = 'Y-m-d', $max = 'now'),
        
        'data_termino' => $faker->date($format = 'Y-m-d', $max = 'now'),
        
        'tipo_cupom' => $faker->randomElement($array = array ('Porcentagem', 'ValorFixo')),

        'ativo' => $faker->randomElement($array = array ('Nao', 'Sim')),

    ];
});
