<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagGallerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_galleries')->insert([
            [
                "name" => "restaurant",
                "filter" => "filter-restaurant",
                "created_at" => now()
            ],
            [
                "name" => "swimming pool",
                "filter" => "filter-swimmingpool",
                "created_at" => now()
            ],
            [
                "name" => "spa",
                "filter" => "filter-spa",
                "created_at" => now()
            ],
            [
                "name" => "room view",
                "filter" => "filter-roomview",
                "created_at" => now()
            ],
            
        ]);
    }
}
