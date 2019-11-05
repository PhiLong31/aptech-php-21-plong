<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Phone::class, function (Faker $faker) {
    return [
        'number_phone' => $faker->unique()->e164PhoneNumber,
        'user_name' => $faker->name,
        'user_id' => $faker->unique()->randomElement(App\User::all()->pluck('id')->toArray())
    ];
});
