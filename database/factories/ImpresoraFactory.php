<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Impresora::class, function (Faker $faker) {
    return [
        'nombre_impresora' => $faker->name,
        'caracteristicas' => [
            "marca" => $faker->word,
            "modelo" => $faker->word,
            "tipo" => $faker->word
        ],
        'dependencia_id' => function (){
        	return factory(App\Models\Dependencia::class)->create()->id;
        },
        'estado' => rand(0,1)
    ];
});
