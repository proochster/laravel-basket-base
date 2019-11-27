<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'slug' => $faker->unique()->slug,
        'details' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'price' => $faker->randomNumber(3),
        'description' => $faker->text($maxNbChars = 200)
    ];
});
