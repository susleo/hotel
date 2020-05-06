<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guest;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(Guest::class, function (Faker $faker) {
//    $image = asset('storage/images/avator');
    $image = ['1.png','2.png','4.png','3.png','5.png',];
    return [
        //
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('hello'),
        'city'=>$faker->city,
        'country'=>$faker->country,
        'image'=>'images/avator/'.$faker->randomElement($image),
        'number'=>$faker->phoneNumber,
        'gender'=>$faker->randomElement(['male', 'female']),
        'remember_token' => Str::random(10),
    ];
});




