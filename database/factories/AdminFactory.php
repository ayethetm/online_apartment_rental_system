<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo' => $faker->name,
        'address' => $faker->name,
        'user_id'=>function(){
       		return factory(\App\User::class)->create()->id;
       	},
    ];
});
