<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductCategory;
use Faker\Generator as Faker;
use Faker\Factory as Faker1;

$factory->define(ProductCategory::class, function (Faker $faker) {
    $faker1 = Faker1::create('ru_RU');

    return [
        'title' => $faker1->word,
        'anons' => $faker1->paragraph,
        'desc' => $faker1->realText(),
    ];
});
