<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ali Bardestani',
            'email' => 'wdxa50@gmail.com',
            'password' => Hash::make('ali123456'),
            'email_verified_at' => now(),  // اگر میخوای ایمیلش تایید شده باشه
            'username' => Str::slug('Ali Bardestani'), // اگر فیلد username داری و میخوای مقدارش باشه
            'remember_token' => Str::random(10), // اگر لازم داری
        ]);

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

        Post::factory()->count(5)->create();

        $this->call([
           PostSeeder::class,
        ]);
    }
}
