<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
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
                'name' => 'Progetto 1',
                'title' => 'Titolo progetto 1',
                'slug' => 'titolo-progetto-1',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 2',
                'title' => 'Titolo progetto 2',
                'slug' => 'titolo-progetto-2',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 2,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 3',
                'title' => 'Titolo progetto 3',
                'slug' => 'titolo-progetto-3',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 4,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 4',
                'title' => 'Titolo progetto 4',
                'slug' => 'titolo-progetto-4',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 5',
                'title' => 'Titolo progetto 5',
                'slug' => 'titolo-progetto-5',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 5,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 6',
                'title' => 'Titolo progetto 6',
                'slug' => 'titolo-progetto-6',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 4,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 8',
                'title' => 'Titolo progetto 8',
                'slug' => 'titolo-progetto-8',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 9',
                'title' => 'Titolo progetto 9',
                'slug' => 'titolo-progetto-9',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 10',
                'title' => 'Titolo progetto 10',
                'slug' => 'titolo-progetto-10',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 11',
                'title' => 'Titolo progetto 11',
                'slug' => 'titolo-progetto-11',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 12',
                'title' => 'Titolo progetto 12',
                'slug' => 'titolo-progetto-12',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 13',
                'title' => 'Titolo progetto 13',
                'slug' => 'titolo-progetto-13',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 14',
                'title' => 'Titolo progetto 14',
                'slug' => 'titolo-progetto-14',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 15',
                'title' => 'Titolo progetto 15',
                'slug' => 'titolo-progetto-15',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 16',
                'title' => 'Titolo progetto 16',
                'slug' => 'titolo-progetto-16',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 17',
                'title' => 'Titolo progetto 17',
                'slug' => 'titolo-progetto-17',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 18',
                'title' => 'Titolo progetto 18',
                'slug' => 'titolo-progetto-18',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 19',
                'title' => 'Titolo progetto 19',
                'slug' => 'titolo-progetto-19',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
            [
                'name' => 'Progetto 20',
                'title' => 'Titolo progetto 20',
                'slug' => 'titolo-progetto-20',
                'image' => 'https://dummyimage.com/700x350/dee2e6/6c757d.jpg',
                'difficulty' => 3,
                'description' => 'Descrizione progetto',
                'programming_language' => [
                    'HTML',
                    'css',
                ],
            ],
        ];

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->name = $post['name'];
            $newPost->title = $post['title'];
            $newPost->slug = Str::slug($post['title'], '-');
            $newPost->image = $post['image'];
            $newPost->difficulty = $post['difficulty'];
            $newPost->description = $post['description'];
            $newPost->programming_language = implode(' - ', $post['programming_language']);
            $newPost->save();
        }
    }
}
