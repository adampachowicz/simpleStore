<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->lastName,
        'street' => $faker->streetName,
        'city' => $faker->city,
        'psc'=>$faker->postcode,
        'email'=> $faker->email,
        'phone' => $faker->email,
        'nip' => $faker->randomNumber(9). '3',
    ];
});
