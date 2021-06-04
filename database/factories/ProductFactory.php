<?php

/** @var Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'id' => $faker->randomKey(),
        'price_each' => $faker->randomDigit,
        'description' => $faker->text,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
