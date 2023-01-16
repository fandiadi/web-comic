<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name_id' => fake()->sentence(mt_rand(3, 8)),
            'slug' => fake()->slug(),
            'chapter' => fake()->randomNumber(),
            'type_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 10),
            'create_at' => now(),
        ];
    }
}
