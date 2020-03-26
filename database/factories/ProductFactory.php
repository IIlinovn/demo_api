<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'anons' => $faker->paragraph,
        'desc' => $faker->realText(),
        'price' => $faker->numberBetween(100, 500),
        'image' => 'https://picsum.photos/200/300',
    ];
});
