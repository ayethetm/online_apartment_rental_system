<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rental_list;
use Faker\Generator as Faker;

$factory->define(Rental_list::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'photo' => $faker->name,
        'type_id'=>function(){
       		return factory(\App\Type::class)->create()->id;
       	},
       	'monthly_fees' => $faker->randomNumber(5),
       	'length' => $faker->randomNumber(2),
       	'width' => $faker->randomNumber(2),
       	'bedrooms' => $faker->randomNumber(1),
       	'bathrooms'=> $faker->randomNumber(1),
       	'township_id'=>function(){
       		return factory(\App\Township::class)->create()->id;
       	},
       	'contact_phone_no'=>$faker->phoneNumber,
       	'description'=>$faker->paragraph,
       	 'owner_id'=>function(){
       		return factory(\App\Rent_ads_owner::class)->create()->id;
       	},
    ];
});
