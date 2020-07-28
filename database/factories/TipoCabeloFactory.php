<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\TipoCabelo;
use Faker\Generator as Faker;

$factory->define(TipoCabelo::class, function (Faker $faker) {
    return [
        //
        'identificador_url' => $faker->slug,

        'nome' => $faker->name,

        'descricao' => $faker->text,

        'titulo_para_seo' => $faker->name,

        'palavras_chave' => $faker->words($nb = 10, $asText = true),

        'descricao_para_seo' => $faker->text,

        'exibir_na_loja' => $faker->randomElement($array = array ('Nao', 'Sim')),
    ];
});
