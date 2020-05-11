<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders;
use App\OrdersItems;
use App\Product;
use Faker\Generator as Faker;

$factory->define(OrdersItems::class, function (Faker $faker) {
    return [
        'order_id' => Orders::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'quantity' => $faker->randomDigit(2),
    ];
});

