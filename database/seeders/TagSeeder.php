<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                "name" => 'Breakfast',
                "icon" => 'fa fa-coffee',
                "content" => 'Breakfast Included'
            ],
            [
                "name" => 'WiFi',
                "icon" => 'fa fa-wifi',
                "content" => 'Free WiFi'
            ],
            [
                "name" => 'TV',
                "icon" => 'fa fa-television',
                "content" => 'Plasma TV with cable channels'
            ],
            [
                "name" => 'Bathroom',
                "icon" => 'fa fa-bath',
                "content" => '2 Bathrooms'
            ],
            [
                "name" => 'Beds: 1 King',
                "icon" => null,
                "content" => null
            ],
            [
                "name" => 'Beds: 2 King and 1 Sofabed',
                "icon" => null,
                "content" => null
            ],
            [
                "name" => 'Max Guests: 2',
                "icon" => null,
                "content" => null
            ],
            [
                "name" => 'Max Guests: 4',
                "icon" => null,
                "content" => null
            ],
            [
                "name" => 'Beds: 2 King',
                "icon" => null,
                "content" => null
            ],
            [
                "name" => 'Beds: 1 King and 1 Sofabed',
                "icon" => null,
                "content" => null
            ],
        ]);
    }
}
