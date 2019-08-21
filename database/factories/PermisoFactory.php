<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Permiso;

$factory->define(permiso::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->word,
        'slug' => $faker->word,
    ];
});
