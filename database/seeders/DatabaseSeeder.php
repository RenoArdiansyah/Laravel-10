<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();
        
        User::factory()->create([
            'name'  => 'Reno45',
            'username' => 'reno45',
            'email' => 'admin@exemple.com',
            'password' => Hash::make('password'),
            'is_admin' => true
            ]);
            
        Post::factory(50)->create();
        
        $categories =  [
            ['name' => 'Programming', 'slug' => 'programming'],
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
