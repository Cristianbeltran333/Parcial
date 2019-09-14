<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Dependencia::class, function (Faker $faker) {
    return [
        'nombre_dependencia' => $faker->word,
        'nro_piso' => $faker->randomDigitNotNull,
        'sucursal_id' => function (){
        	return factory(App\Models\Sucursal::class)->create()->id;
        },
        'estado' => rand(0,1)
    ];
});
