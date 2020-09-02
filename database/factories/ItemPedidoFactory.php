<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ItemPedido;
use App\Model\Usuario;
use App\Model\Produto;
use App\Model\Promocao;
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

        'promocao_id' => function (){

            return Promocao::all()->random();
            
        },

        'preco_unitario' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),

        'qtde_unitaria' => $faker->randomDigitNotNull,
    ];
});
