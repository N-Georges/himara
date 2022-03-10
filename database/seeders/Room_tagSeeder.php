<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Room_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_tag')->insert([
            // ISTANBUL
            [
                "room_id" => 1,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 1,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 1,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 1,
                "tag_id" => 5,
                "created_at" => now()
            ],
            [
                "room_id" => 1,
                "tag_id" => 7,
                "created_at" => now()
            ],
            // TANGER
            [
                "room_id" => 2,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 2,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 2,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 2,
                "tag_id" => 9,
                "created_at" => now()
            ],
            [
                "room_id" => 2,
                "tag_id" => 8,
                "created_at" => now()
            ],
            // TOKYO
            [
                "room_id" => 3,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 3,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 3,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 3,
                "tag_id" => 5,
                "created_at" => now()
            ],
            [
                "room_id" => 3,
                "tag_id" => 7,
                "created_at" => now()
            ],
            // PARIS
            [
                "room_id" => 4,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 4,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 4,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 4,
                "tag_id" => 6,
                "created_at" => now()
            ],
            [
                "room_id" => 4,
                "tag_id" => 8,
                "created_at" => now()
            ],
            // RIO DE JANEIRO
            [
                "room_id" => 5,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 5,
                "tag_id" => 4,
                "created_at" => now()
            ],
            [
                "room_id" => 5,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 5,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 5,
                "tag_id" => 5,
                "created_at" => now()
            ],
            [
                "room_id" => 5,
                "tag_id" => 7,
                "created_at" => now()
            ],
            // SICILIA
            [
                "room_id" => 6,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 6,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 6,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 6,
                "tag_id" => 5,
                "created_at" => now()
            ],
            [
                "room_id" => 6,
                "tag_id" => 7,
                "created_at" => now()
            ],
            // MOSCOU
            [
                "room_id" => 7,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 7,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 7,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 7,
                "tag_id" => 6,
                "created_at" => now()
            ],
            [
                "room_id" => 7,
                "tag_id" => 9,
                "created_at" => now()
            ],
            // LONDON
            [
                "room_id" => 8,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 8,
                "tag_id" => 2,
                "created_at" => now()
            ],
            [
                "room_id" => 8,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 8,
                "tag_id" => 9,
                "created_at" => now()
            ],
            [
                "room_id" => 8,
                "tag_id" => 8,
                "created_at" => now()
            ],
            // DUBAI
            [
                "room_id" => 9,
                "tag_id" => 1,
                "created_at" => now()
            ],
            [
                "room_id" => 9,
                "tag_id" => 3,
                "created_at" => now()
            ],
            [
                "room_id" => 9,
                "tag_id" => 5,
                "created_at" => now()
            ],
            [
                "room_id" => 9,
                "tag_id" => 7,
                "created_at" => now()
            ],
        ]);
    }
}
