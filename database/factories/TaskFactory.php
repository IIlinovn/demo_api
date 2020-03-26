<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(),
        'desc' => $faker->paragraph(),
        'hour' => $faker->numberBetween(1, 24),
        'minutes' => $faker->numberBetween(1, 60),
    ];
});
