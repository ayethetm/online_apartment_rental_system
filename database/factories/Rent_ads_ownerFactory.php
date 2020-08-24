<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Rent_ads_owner;
use Faker\Generator as Faker;

$factory->define(Rent_ads_owner::class, function (Faker $faker) {
    return [
        
    'name' => $faker->name,
    'photo' => $faker->text,
    'phone' => $faker->unique()->phoneNumber,
    'address' => $faker->name,
    'user_id'=>function(){
       		return factory(\App\User::class)->create()->id;
       	},
    ];
});
