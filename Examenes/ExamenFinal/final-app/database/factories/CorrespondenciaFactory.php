<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Correspondencia>
 */
class CorrespondenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_dest = DB::table('destinatarios')->inRandomOrder()->value('id');
        return [
            'fecha' => fake()->dateTimeBetween('2023-12-01', '2023-12-09')->format('Y-m-d'),
            'remitente' => fake()->firstName(),
            'asunto' => fake()->sentence(3),
            'cite' => fake()->sentence(2),
            'destinatario_id' => fake()->numberBetween(1, 3),
        ];
    }
}
