<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Sucursal::class, function (Faker $faker) {
    return [
        'nombre_sucursal' => $faker->company,
        'direccion' => $faker->address,
        'cliente' => $faker->name,
        'ciudad' => $faker->city,
        'estado' => rand(0,1)
    ];
});
