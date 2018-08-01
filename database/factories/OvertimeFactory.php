<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Overtime::class, function (Faker $faker) {
    $paid = $faker->boolean(20);
    $off = $paid ? $faker->boolean(20) : false;
    return [
        'minutes' => $faker->numberBetween(1, 120),
        'description' => $faker->text('50'),
        'off_period'  => $off,
        'paid_out'  => $paid
    ];
});