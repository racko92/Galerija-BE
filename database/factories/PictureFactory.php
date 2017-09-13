<?php

use Faker\Generator as Faker;

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),
        'gallery_id' => $faker->numberBetween($min = 0, $max = 50)
    ];
});
