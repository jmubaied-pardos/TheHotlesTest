<?php

/** @var Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'identity_document' =>$faker->numerify('########').$faker->word(),
        'name'              =>$faker->name,
        'surnames'          =>$faker->firstName,
        'email'             =>$faker->freeEmail,
        'phone'             =>$faker->phoneNumber
    ];
});
