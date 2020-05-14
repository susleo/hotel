<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoomType;
use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    $images = ['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg'];
    return [
        //
        'room_type_id'=> function(){
            return RoomType::all()->random();
        } ,
        'image'=>'storage/images/room_types/'.$faker->randomElement($images),
        'isPrimary'=> true,
        'status'=>true,
    ];
});
