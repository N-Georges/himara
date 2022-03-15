<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "name" => "jane doe", 
                "email" => "janedoe@gmail.com", 
                "website" => null, 
                "comment" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.",
                'blog_id' => 2,
                "created_at" => now()
            ],
            [
                "name" => "ina aldrich", 
                "email" => "inaaldrich@gmail.com", 
                "website" => null, 
                "comment" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.",
                'blog_id' => 1,
                "created_at" => now()
            ],
            [
                "name" => "william whiten", 
                "email" => "williamwhiten@gmail.com", 
                "website" => null, 
                "comment" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.",
                'blog_id' => 6,
                "created_at" => now()
            ],
            [
                "name" => "amy ellison", 
                "email" => "amy ellison@gmail.com", 
                "website" => null, 
                "comment" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.",
                'blog_id' => 5,
                "created_at" => now()
            ],
            
        ]);
    }
}
