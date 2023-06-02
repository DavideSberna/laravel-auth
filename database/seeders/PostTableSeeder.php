<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post 1',
                'description' => 'Description of Post 1',
                'image' => 'post1.jpg',
                'vote' => 0,
            ],
            [
                'title' => 'Post 2',
                'description' => 'Description of Post 2',
                'image' => 'post2.jpg',
                'vote' => 0,
            ],
            [
                'title' => 'Post 3',
                'description' => 'Description of Post 3',
                'image' => 'post3.jpg',
                'vote' => 0,
            ],
            [
                'title' => 'Post 4',
                'description' => 'Description of Post 4',
                'image' => 'post4.jpg',
                'vote' => 0,
            ],
            [
                'title' => 'Post 5',
                'description' => 'Description of Post 5',
                'image' => 'post5.jpg',
                'vote' => 0,
            ],
        ];

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->description = $post['description'];
            $newPost->image = $post['image'];
            $newPost->vote = $post['vote'];
            $newPost->save();
        }
    }
}
