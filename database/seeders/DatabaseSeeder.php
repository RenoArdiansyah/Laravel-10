<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        
        // User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
        Post::factory(50)->create();
        
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
