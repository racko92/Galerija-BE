<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker){
    return [
        'name' => $faker->firstName,
        'description' => $faker->text,
        'user_id' => $faker->numberBetween($min = 0, $max = 10),

    ];
});