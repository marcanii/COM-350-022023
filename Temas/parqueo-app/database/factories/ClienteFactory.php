<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $placa = fake()->randomDigit().fake()->randomDigit().fake()->randomDigit().fake()->randomDigit().'-';
        $placa .= fake()->randomLetter() . fake()->randomLetter() . fake()->randomLetter();
        return [
            'placa' => $placa,
            'tipo_documento_id' => fake()->numberBetween(1, 5),
            'numero_documento' => fake()->randomNumber(8, false),
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'telefono' => fake()->randomNumber(8, false),
            'fecha_nacimiento' => fake()->dateTimeInInterval('-1 week', '+3 days'),
        ];
    }
}
