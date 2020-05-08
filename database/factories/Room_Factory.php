<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {

    return [
        //$table->id();

     'room_number'=>  $faker->randomNumber(),
     'room_status'=>$faker->randomElement([true,false]),
      'room_type_id'=> function(){
        return \App\RoomType::all()->random();
      },
    ];
});
