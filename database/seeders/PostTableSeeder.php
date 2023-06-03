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
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tincidunt urna, ut semper tortor blandit non. Aliquam eget libero sed tortor fermentum luctus. Maecenas eleifend enim vitae tincidunt aliquam. Duis dapibus massa eget justo venenatis convallis. Morbi euismod felis et purus congue dignissim. Etiam eu ligula sed urna venenatis hendrerit. Nunc feugiat lacinia arcu id pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur placerat nisi in tellus semper tristique. Sed dignissim ligula non neque fringilla gravida. Suspendisse pretium dolor et tincidunt venenatis.'
            ],
            [
                'title' => 'Post 2',
                'description' => 'Description of Post 2',
                'image' => 'post2.jpg',
                'vote' => 0,
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tincidunt urna, ut semper tortor blandit non. Aliquam eget libero sed tortor fermentum luctus. Maecenas eleifend enim vitae tincidunt aliquam. Duis dapibus massa eget justo venenatis convallis. Morbi euismod felis et purus congue dignissim. Etiam eu ligula sed urna venenatis hendrerit. Nunc feugiat lacinia arcu id pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur placerat nisi in tellus semper tristique. Sed dignissim ligula non neque fringilla gravida. Suspendisse pretium dolor et tincidunt venenatis.'
            ],
            [
                'title' => 'Post 3',
                'description' => 'Description of Post 3',
                'image' => 'post3.jpg',
                'vote' => 0,
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tincidunt urna, ut semper tortor blandit non. Aliquam eget libero sed tortor fermentum luctus. Maecenas eleifend enim vitae tincidunt aliquam. Duis dapibus massa eget justo venenatis convallis. Morbi euismod felis et purus congue dignissim. Etiam eu ligula sed urna venenatis hendrerit. Nunc feugiat lacinia arcu id pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur placerat nisi in tellus semper tristique. Sed dignissim ligula non neque fringilla gravida. Suspendisse pretium dolor et tincidunt venenatis.'
            ],
            [
                'title' => 'Post 4',
                'description' => 'Description of Post 4',
                'image' => 'post4.jpg',
                'vote' => 0,
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tincidunt urna, ut semper tortor blandit non. Aliquam eget libero sed tortor fermentum luctus. Maecenas eleifend enim vitae tincidunt aliquam. Duis dapibus massa eget justo venenatis convallis. Morbi euismod felis et purus congue dignissim. Etiam eu ligula sed urna venenatis hendrerit. Nunc feugiat lacinia arcu id pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur placerat nisi in tellus semper tristique. Sed dignissim ligula non neque fringilla gravida. Suspendisse pretium dolor et tincidunt venenatis.'
            ],
            [
                'title' => 'Post 5',
                'description' => 'Description of Post 5',
                'image' => 'post5.jpg',
                'vote' => 0,
                'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tincidunt urna, ut semper tortor blandit non. Aliquam eget libero sed tortor fermentum luctus. Maecenas eleifend enim vitae tincidunt aliquam. Duis dapibus massa eget justo venenatis convallis. Morbi euismod felis et purus congue dignissim. Etiam eu ligula sed urna venenatis hendrerit. Nunc feugiat lacinia arcu id pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur placerat nisi in tellus semper tristique. Sed dignissim ligula non neque fringilla gravida. Suspendisse pretium dolor et tincidunt venenatis.'
            ],
        ];

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->description = $post['description'];
            $newPost->article = $post['article'];
            $newPost->image = $post['image'];
            $newPost->vote = $post['vote'];
            $newPost->save();
        }
    }
}
