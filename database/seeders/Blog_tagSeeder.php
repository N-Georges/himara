<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Tag_blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog_tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pivot_blogs_tags')->insert([
                [
                    "blog_id" => 1,
                    "tag_blog_id" => 1,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 1,
                    "tag_blog_id" => 3,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 1,
                    "tag_blog_id" => 2,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 1,
                    "tag_blog_id" => 7,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 2,
                    "tag_blog_id" => 1,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 2,
                    "tag_blog_id" => 8,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 2,
                    "tag_blog_id" => 3,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 3,
                    "tag_blog_id" => 3,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 3,
                    "tag_blog_id" => 5,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 3,
                    "tag_blog_id" => 6,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 4,
                    "tag_blog_id" => 7,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 4,
                    "tag_blog_id" => 5,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 4,
                    "tag_blog_id" => 8,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 5,
                    "tag_blog_id" => 1,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 5,
                    "tag_blog_id" => 8,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 6,
                    "tag_blog_id" => 2,
                    "created_at" => now()
                ],
                [
                    "blog_id" => 6,
                    "tag_blog_id" => 3,
                    "created_at" => now()
                ],
        ]);
        // $blog = Blog::all();
        // Tag_blog::all()->each(function ($tags) use ($blog) {
        //     $tags->blogs()->attach(
        //     $blog->random(rand(1, 8))->pluck('id')->toArray()
        //     );
        // });
    }
}
