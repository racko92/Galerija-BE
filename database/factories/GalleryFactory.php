<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker){
    return [
        'name' => $faker->firstName,
        'description' => $faker->text,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),

    ];
});