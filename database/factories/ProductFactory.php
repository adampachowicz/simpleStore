<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 400),
        'price_id' => $faker->randomDigitNot(5),
        'stock_id' => $faker->randomDigitNot(5),
    ];
});