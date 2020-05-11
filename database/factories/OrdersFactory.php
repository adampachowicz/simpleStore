<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    return [
        'customers_id' => Customer::all()->random()->id,
        'status' => $faker->randomElement(['done', 'preparing', 'error']),
    ];
});
