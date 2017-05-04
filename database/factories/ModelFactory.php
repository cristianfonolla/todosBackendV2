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
<<<<<<< HEAD
$factory->define(App\TodosBackend\User::class, function (Faker\Generator $faker) {
=======
$factory->define(PaoloDavila\TodosBackend\User::class, function (Faker\Generator $faker) {
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'api_token'      => str_random(60),
        'remember_token' => str_random(10),
    ];
});