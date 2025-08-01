<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        User::factory()->create([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ]);
        return [
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(5),
            'published_at' => $this->faker->date(),
            'user_id' => 1,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
