<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        //
        'license_plate' => strtoupper(Str::Random(2).'-'.Str::Random(3).'-'.Str::Random(2)),
        'brand' => $faker->cityPrefix,
        'type' => $faker->word,
        'day_price' => $faker->randomFloat(2, 50, 500),
    ];
});
