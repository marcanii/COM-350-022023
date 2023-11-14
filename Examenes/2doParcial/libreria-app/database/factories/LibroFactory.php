<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Libro;

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
            'titulo' => fake()->sentence(3),
            'editorial_id' => fake()->numberBetween(1, 10),
            'edicion' => fake()->numberBetween(1, 10),
            'pais' => fake()->sentence(1),
            'precio' => fake()->randomFloat(2, 1, 100),
        ];
    }
}
