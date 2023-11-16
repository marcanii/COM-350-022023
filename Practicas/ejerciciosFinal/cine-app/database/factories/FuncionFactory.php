<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Pelicula;
use App\Models\Salon;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcion>
 */
class FuncionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $peliculas = Pelicula::pluck('id');
        $salas = Salon::pluck('id');
        return [
            'pelicula_id' => $this->faker->randomElement($peliculas),
            'sala_id' => $this->faker->randomElement($salas),
            'fecha_hora_inicio' => $this->faker->dateTimeBetween('+1 day', '+2 day'),
            'precio_entrada' => $this->faker->randomFloat(2, 10, 50),
        ];
    }
}
