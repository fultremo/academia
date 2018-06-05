<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->sentence(10, true),
        'message' =>  $faker->paragraphs(3, true),
    ];
});
