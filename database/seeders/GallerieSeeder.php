<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                "image" => "gallery/gallery1.jpg", 
                "name" => "Swimming Pool", 
                "tag_gallerie_id" => 2,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery2.jpg", 
                "name" => "Room View", 
                "tag_gallerie_id" => 4,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery3.jpg", 
                "name" => "Cocktail", 
                "tag_gallerie_id" => 1,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery4.jpg", 
                "name" => "Breakfast", 
                "tag_gallerie_id" => 1,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery5.jpg", 
                "name" => "Playground", 
                "tag_gallerie_id" => 2,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery6.jpg", 
                "name" => "Restaurant", 
                "tag_gallerie_id" => 1,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery7.jpg", 
                "name" => "Wedding Ceremony", 
                "tag_gallerie_id" => 1,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery8.jpg", 
                "name" => "Beach", 
                "tag_gallerie_id" => 4,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery9.jpg", 
                "name" => "Honeymoon Room", 
                "tag_gallerie_id" => 4,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery10.jpg", 
                "name" => "Sea", 
                "tag_gallerie_id" => 4,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery11.jpg", 
                "name" => "Spa Therapy", 
                "tag_gallerie_id" => 3,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery12.jpg", 
                "name" => "Restaurant", 
                "tag_gallerie_id" => 1,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery13.jpg", 
                "name" => "Restaurant", 
                "tag_gallerie_id" => 4,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery14.jpg", 
                "name" => "Sea", 
                "tag_gallerie_id" => 2,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery15.jpg", 
                "name" => "Restaurant", 
                "tag_gallerie_id" => 1,
                "created_at" => now()
            ],
            [
                "image" => "gallery/gallery16.jpg", 
                "name" => "Room View", 
                "tag_gallerie_id" => 4,
                "created_at" => now()
            ],
        ]);
    }
}
