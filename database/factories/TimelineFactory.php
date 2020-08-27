<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Timeline;
use Faker\Generator as Faker;

$factory->define(Timeline::class, function (Faker $faker) {
    return [
        'user_id'       => factory(User::class),
        'title'         => $faker->words(3, true),
        'description'   => $faker->paragraph,
        'url_web'       => $faker->url,
        'cover'         => $faker->imageUrl(640, 480),
        'slug'          => $faker->slug
    ];
});
