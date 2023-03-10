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

    // 5) Creo i dati fake a "PostFactory".
    public function definition()
    {
        return [
            'title' => fake()->words(5, true),
            'body' => fake()->text(),
        ];
    }
}