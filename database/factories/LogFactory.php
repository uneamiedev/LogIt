<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Log;
use App\User;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    return [
        'user_id'       => factory(User::class),
        'timeline_id'   => $faker->randomDigit,
        'body'          => $faker->sentence,
    ];
});
