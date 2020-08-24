<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Township;
use Faker\Generator as Faker;

$factory->define(Township::class, function (Faker $faker) {
    return [
        
        'name' => $faker->name,
   
    ];
});
