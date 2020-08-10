<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ItemPedido;
use App\Model\Usuario;
use App\Model\Produto;
use Faker\Generator as Faker;

$factory->define(ItemPedido::class, function (Faker $faker) {
    return [
        //
        'pedido_id' => function (){

            return Usuario::all()->random();
            
        },

        'produto_id' => function (){

            return Produto::all()->random();
            
        },

        'qtde_unitaria' => $faker->randomDigitNotNull,

        'valor_unitario' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),
    ];
});
