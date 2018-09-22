<?php

use Faker\Generator as Faker;

$factory->define(myRoommie\User::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName(array_random(['Male','Female'])),
        'lastName'  => $faker->lastName,
        'email'     => $faker->email,
        'phone'     => random_int(1200000001,99999999999),
        'sex'       => array_random(['F','M']),
        'password'  => \Illuminate\Support\Facades\Hash::make('testing'),
        'avatar'    =>$faker->imageUrl()
    ];
});
