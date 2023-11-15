<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->firstName(),
            'editorial_id' => fake()->numberBetween(1, 10),
            'edicion' => fake()->randomNumber(4, false),
            'pais' => fake()->firstName(),
            'precio' => fake()->randomNumber(8, false)
        ];
    }
}
