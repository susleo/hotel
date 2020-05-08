<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoomType;
use Faker\Generator as Faker;

$factory->define(RoomType::class, function (Faker $faker) {
    return [
        //
     'room_type'=>  $faker->randomElement(['Single Bed','Double Deluexe','Highly Satisfying Bed','Ultra Legend','Beauty Nature']),
     'description'=>$faker->sentence,
     'price'=> $faker->buildingNumber,
     'max_adults'=>$faker->randomDigit,
     'max_children'=>$faker->randomDigit,
     'status'=>true,
    ];
});
