<?php

<<<<<<< HEAD
$factory->define(App\TodosBackend\Task::class, function (Faker\Generator $faker) {
=======
$factory->define(PaoloDavila\TodosBackend\Task::class, function (Faker\Generator $faker) {
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
    return [
        'name'     => $faker->sentence,
        'done'     => $faker->boolean,
        'priority' => $faker->randomDigit,
    ];
});
