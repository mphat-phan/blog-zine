<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
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
        $title = fake()->sentence($nbWords = 5, $variableNbWords = true);
        return [
            'user_id' => \App\Models\User::factory()->create()->id,
            'title' => $title,
            'metaTitle' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => Str::slug($title, '-'),
            'summary' => fake()->text(),
            'content' => fake()->paragraph(),
            'image' => fake()->imageUrl()
        ];
    }
}
