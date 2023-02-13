<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonDetail>
 */
class PersonDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // 5) Creo i dati fake a "PersonDetailFactory".
    public function definition()
    {
        return [
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'avatar' => null,
        ];
    }
}