<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
          'Technology',
          'Health',
          'Science',
          'Sport',
          'Politics',
          'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        Post::factory()->count(100)->create();

        $this->call([
           PostSeeder::class,
        ]);
    }
}
