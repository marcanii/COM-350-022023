<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $placa = $this->faker->randomDigit() . $this->faker->randomDigit() . $this->faker->randomDigit() . $this->faker->randomDigit() . '-';
        $placa .= $this->faker->randomLetter() . $this->faker->randomLetter() . $this->faker->randomLetter();

        return [
            'placa' => $placa,
            'tipo_documento_id' => $this->faker->numberBetween(1, 5),
            'numero_documento' => $this->faker->randomNumber(8, false),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->randomNumber(8, false),
            'fecha_nacimiento' => $this->faker->dateTimeInInterval('-1 week', '+3 days'),
        ];
    }
}
