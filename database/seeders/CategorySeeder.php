<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =  [
            ['name' => 'Progamer', 'slug' => 'progamer'],
            ['name' => 'Teknologi', 'slug' => 'teknologi'],
            ['name' => 'Personal', 'slug' => 'personal'],
            ['name' => 'Travel', 'slug' => 'travel'],
            ['name' => 'Science', 'slug' => 'science'],
            ['name' => 'Art', 'slug' => 'art'],
            ['name' => 'Sports', 'slug' => 'sports'],
            ['name' => 'Food', 'slug' => 'food'],
            ['name' => 'Health', 'slug' => 'health'],
            ['name' => 'Fashion', 'slug' => 'fashion'],
        ];

        foreach($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => $category['slug']
            ]);
        }
    }
}
