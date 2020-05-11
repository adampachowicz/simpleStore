<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'product_id' => Product::all()->random()->id,
        'quantity' => $faker->randomNumber(3),
    ];
});
