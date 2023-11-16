<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(2),
            'descripcion' => $this->faker->paragraph(),
            'duracion_min' => $this->faker->numberBetween(60, 240), // duración en minutos
            'genero' => $this->faker->randomElement(['Acción', 'Comedia', 'Drama', 'Ciencia ficción', 'Fantasía']),
        ];
    }
}
