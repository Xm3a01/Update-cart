<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'item_name' => $faker->name,
        'ar_item_name' => $faker->name,
        'price' => $faker->randomFloat(1000000, $min = 0),
        'phone1' => '09'.$faker->randomNumber(8, false),
        'phone2' => '09'.$faker->randomNumber(8, false),
        'description' => $faker->paragraph,
        'available' => random_int(0,1),
        'ar_description' => $faker->paragraph
    ];
});
