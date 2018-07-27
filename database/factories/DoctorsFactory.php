<?php

use Faker\Generator as Faker;

$factory->define(App\Doctors::class, function (Faker $faker) {
    return [
        'doctor_name' => 'Dr.' . $faker->firstNameMale
    ];
});
