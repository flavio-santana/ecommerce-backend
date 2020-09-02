<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Linha;
use App\Model\Produto;

use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    
    return [
        
        'linha_id' => function (){

            return Linha::all()->random();
            
        },
        
        'sku' => $faker->randomNumber($nbDigits = 5, $strict = false),

        'codigo_barras' => $faker->ean13,
        
        'identificador_url' => $faker->slug,
        
        'nome' => $faker->name,
        
        'descricao' => $faker->text,
        
        'palavras_chave' => $faker->words($nb = 5, $asText = true), 
        
        'titulo_para_seo' => $faker->name,
        
        'descricao_para_seo' => $faker->text,
        
        'preco' =>  $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),
         
        'peso' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 2),
        
        'altura' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 2),

        'largura' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 2),
        
        'comprimento' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 2),
        
        'estoque' => $faker->randomNumber($nbDigits = NULL, $strict = false),

        'ordem' => $faker->randomDigitNotNull,

        'ativo' => $faker->randomElement($array = array ('Nao', 'Sim')),

        'lancamento' => $faker->randomElement($array = array ('Nao', 'Sim')),

        'destaque' => $faker->randomElement($array = array ('Nao', 'Sim')),

        'frete_gratis' => $faker->randomElement($array = array ('Nao', 'Sim')),

    ];
});