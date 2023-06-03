<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Category 1'
            ],
            [
                'name' => 'Category 2'
            ],
            [
                'name' => 'Category 3'
            ],
            [
                'name' => 'Category 4'
            ],
            [
                'name' => 'Category 5'
            ],
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->save();
        }
    }
}
