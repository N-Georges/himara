<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                "image" => "images/users/user1.jpg", 
                "name" => "jane doe", 
                "created_at" => now()
            ],
            [
                "image" => "images/users/user2.jpg", 
                "name" => "victor hugo", 
                "created_at" => now()
            ],
            [
                "image" => "images/users/user3.jpg", 
                "name" => "voltaire", 
                "created_at" => now()
            ],
        ]);
    }
}
