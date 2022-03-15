<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_blogs')->insert([
            [
                "name" => 'party',
                "created_at" => now()
            ],
            [
                "name" => 'travel',
                "created_at" => now()
            ],
            [
                "name" => 'wedding',
                "created_at" => now()
            ],
            [
                "name" => 'food',
                "created_at" => now()
            ],
            [
                "name" => 'music',
                "created_at" => now()
            ],
            [
                "name" => 'city',
                "created_at" => now()
            ],
            [
                "name" => 'image',
                "created_at" => now()
            ],
            [
                "name" => 'hotel',
                "created_at" => now()
            ],
        ]);
    }
}
