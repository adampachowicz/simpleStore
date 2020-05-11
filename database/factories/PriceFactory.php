<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'product_id' => Product::all()->random()->id,
        'price' => $faker->randomNumber(6),
        'currency' => 'zł'
    ];
});
