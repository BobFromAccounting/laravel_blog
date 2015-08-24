<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder{
    
    public function run()
    {
        // deleting all preceeding posts
        Post::truncate();

        $post = new Post();
        $post->title = "My First Post";
        $post->body  = "This is my first post on my Laravel Blog which I have made from scratch!";
        $post->save();

        $post1 = new Post();
        $post1->title = "Dear Diary";
        $post1->body  = "Why you lactose me?";
        $post1->save();

        $post2 = new Post();
        $post2->title = "Confucius Say";
        $post2->body  = "Next time work harder on your seeded data!";
        $post2->save();
    }
}