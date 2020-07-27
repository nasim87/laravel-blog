<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define("App\Post", function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'description'   =>$faker->paragraph(4),
        'category_id'   =>rand(1,10),
        'image' =>$faker->imageUrl($width = 640, $height = 480)
    ];
});
