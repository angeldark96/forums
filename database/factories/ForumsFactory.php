<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Forums;
use Faker\Generator as Faker;

$factory->define(Forums::class, function (Faker $faker) {
    $name = $faker->sentence;
    return [
        "name" => $name,
        'slug' => str_slug($name, '-'),
        "description" => $faker->paragraph
    ];
});
