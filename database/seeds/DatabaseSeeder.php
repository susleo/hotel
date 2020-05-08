<?php

use App\Guest;
use App\Image;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
//  $guests = factory(App\Guest::class,10)->make();
        factory(App\Guest::class, 15)->create();
        factory(App\RoomType::class, 5)->create();
        factory(App\Image::class, 5)->create();
        factory(App\Room::class, 20)->create();

//        $users = factory(App\User::class, 3)->make();
    }
}
