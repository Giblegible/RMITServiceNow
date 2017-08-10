<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
   return [
       'name' => $faker->name,
       'Staff' => $faker->boolean(50),
       'email' => $faker->unique()->safeEmail,
       'phoneNum' => $faker->phoneNumber,
       'program' => $faker->postcode,
   ];
});

$factory->define(App\CustomerQuery::class, function (Faker\Generator $faker) {
    return [
        'serviceArea' => $faker->country,
        'workArea' => $faker->city,
        'problemDescription' => $faker->sentence,
        'problemStatus' => 'Pending',
        'problemSeverity' => 'Pending',
        'customer_id' => function() {
            return factory(App\Customer::class)->create()->id;
        }
    ];
});