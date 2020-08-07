<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'name'   =>$faker->company,
        'address'=>$faker->address,
        'email'  =>$faker->companyEmail,
        'phone'  =>$faker->phoneNumber
    ];
});
