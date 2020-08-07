<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'roomNumber'=>$faker->numerify('###'),
        'beds'=>$faker->numberBetween(1,4),
        'tv'=>$faker->boolean(70),
        'terrace'=>$faker->boolean(50),

    ];
});
