<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
            'name' => 'Femke Petter'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);



        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $hobby = Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobby'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore asperiores quaerat esse eius! Nemo et magni sequi consequuntur doloribus cum, vitae atque at saepe eaque voluptates facere quisquam reiciendis eveniet. Ullam eaque necessitatibus cumque nobis deserunt, architecto id rerum fugiat nostrum earum, commodi numquam voluptatibus aspernatur ducimus animi corrupti! Vel fugiat totam itaque consectetur quaerat perferendis repellendus placeat illo voluptatibus.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore asperiores quaerat esse eius! Nemo et magni sequi consequuntur doloribus cum, vitae atque at saepe eaque voluptates facere quisquam reiciendis eveniet. Ullam eaque necessitatibus cumque nobis deserunt, architecto id rerum fugiat nostrum earum, commodi numquam voluptatibus aspernatur ducimus animi corrupti! Vel fugiat totam itaque consectetur quaerat perferendis repellendus placeat illo voluptatibus.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobby->id,
        //     'title' => 'My Hobby Post',
        //     'slug' => 'my-hobby-post',
        //     'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore asperiores quaerat esse eius! Nemo et magni sequi consequuntur doloribus cum, vitae atque at saepe eaque voluptates facere quisquam reiciendis eveniet. Ullam eaque necessitatibus cumque nobis deserunt, architecto id rerum fugiat nostrum earum, commodi numquam voluptatibus aspernatur ducimus animi corrupti! Vel fugiat totam itaque consectetur quaerat perferendis repellendus placeat illo voluptatibus.</p>'
        // ]);
    }
}
