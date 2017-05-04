<?php

$factory->define(Cristian\TodosBackend\Task::class, function (Faker\Generator $faker) {
    return [
        'name'     => $faker->sentence,
        'done'     => $faker->boolean,
        'priority' => $faker->randomDigit,
    ];
});
