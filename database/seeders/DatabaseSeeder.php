<?php

namespace Database\Seeders;

use App\Models\Tag_blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorieSeeder::class,
            RoomSeeder::class,
            TagSeeder::class,
            Room_tagSeeder::class,
            AuthorSeeder::class,
            CategoriesBlogSeeder::class,
            BlogSeeder::class,
            TagBlogSeeder::class,
            Blog_tagSeeder::class,
            CommentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
