<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_blogs')->insert([
            [
                "name" => "travel", 
                "created_at" => now()
            ],
            [
                "name" => "rooms", 
                "created_at" => now()
            ],
            [
                "name" => "holydays", 
                "created_at" => now()
            ],
            [
                "name" => "events", 
                "created_at" => now()
            ],
        ]);
    }
}
