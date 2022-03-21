<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "image" => 'staff/staff1.jpg',
                "name" => 'Jeanette Owens',
                "job" => 'Housekeeper',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff2.jpg',
                "name" => 'Henry Garrett',
                "job" => 'Receptionist',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff3.jpg',
                "name" => 'Tommy Alexander',
                "job" => 'Chef',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff4.jpg',
                "name" => 'Penny Soto',
                "job" => 'Hotel Manager',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff5.jpg',
                "name" => 'Alex Cox',
                "job" => 'Room Service',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff6.jpg',
                "name" => 'Alfredo Romero',
                "job" => 'Hotel Manager',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff7.jpg',
                "name" => 'Glenda Gilbert',
                "job" => 'Marketing Advisor',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                "image" => 'staff/staff8.jpg',
                "name" => 'Sheila Carter',
                "job" => 'Hotel Manager',
                "description" => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
        ]);
    }
}
