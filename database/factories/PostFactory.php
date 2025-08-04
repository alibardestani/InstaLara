<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(5),
            'published_at' => Carbon::createFromFormat('Y-m-d', '1999-03-22')->toDateTimeString(),
            'user_id' => User::factory(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
