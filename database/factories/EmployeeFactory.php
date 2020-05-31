<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name(),
        'last_name' => $faker->lastName(),
        'avatar' => 'public/images/avatar-default.png',
        'email' => $faker->email(),
        'phone' => $faker->e164PhoneNumber(),
        'company_id' => rand(1,50)
    ];
});
