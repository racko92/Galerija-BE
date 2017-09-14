<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'gallery_id' => $faker->numberBetween($min = 0, $max = 50),
        'user_id' => $faker->numberBetween($min = 0, $max = 10),
    ];
});
