<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "image" => "images/services/restaurant.jpg",
                "title_image" => "Restaurant",
                "icon" => "flaticon-tray-1",
                "title" => "Restaurant",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
                "created_at" => now()
            ],
            [
                "image" => "images/services/spa.jpg",
                "title_image" => "Spa",
                "icon" => "flaticon-nature",
                "title" => "Spa - Beauty &amp; Health",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
                "created_at" => now()
            ],
            [
                "image" => "images/services/conference.jpg",
                "title_image" => "Conference Room",
                "icon" => "flaticon-screen-1",
                "title" => "Conference Room",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
                "created_at" => now()
            ],
            [
                "image" => "images/services/swimming.jpg",
                "title_image" => "Swimming Pool",
                "icon" => "flaticon-sports",
                "title" => "Swimming Pool",
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",
                "created_at" => now()
            ],
        ]);
    }
}
