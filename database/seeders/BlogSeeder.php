<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "image" => "images/blog/blog-post1.jpg", 
                "title" => "10 Tips for Holiday Travel", 
                "author_id" => 1,
                "categorie_id" => 1,
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.",
                "created_at" => now()
            ],
            [
                "image" => "images/blog/blog-post2.jpg", 
                "title" => "Are you ready to enjoy your holidays", 
                "author_id" => 2,
                "categorie_id" => 2,
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.",
                "created_at" => now()
            ],
            [
                "image" => "images/blog/blog-post3.jpg", 
                "title" => "Honeymoon in Hotel Himara", 
                "author_id" => 3,
                "categorie_id" => 3,
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.",
                "created_at" => now()
            ],
            [
                "image" => "images/blog/blog-post4.jpg", 
                "title" => "Travel Gift Ideas for Every Type of Traveler", 
                "author_id" => 2,
                "categorie_id" => 4,
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.",
                "created_at" => now()
            ],
            [
                "image" => "images/blog/blog-post5.jpg", 
                "title" => "Breakfast with coffee and orange juice", 
                "author_id" => 1,
                "categorie_id" => 2,
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.",
                "created_at" => now()
            ],
            [
                "image" => "images/blog/blog-post6.jpg", 
                "title" => "Running On Sand", 
                "author_id" => 3,
                "categorie_id" => 1,
                "description" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima illum. Repellendus cumque veniam quae odit enim.",
                "created_at" => now()
            ],
        ]);
    }
}
