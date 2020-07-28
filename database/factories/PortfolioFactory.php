<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use Faker\Generator as Faker;

$factory->define("App\Portfolio", function (Faker $faker) {
    return [
        'image' =>$faker->imageUrl($width = 640, $height = 480)
    ];
});
