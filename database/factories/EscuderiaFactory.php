<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Escuderia>
 */
class EscuderiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(["Ferrari", "Mercedes", "Lamborghini", "BMW", "Mclaren"]),
            'fecha_creacion' => $this->faker->date(),
            'num_pilotos' => $this->faker->numberBetween(1, 100),
            'sobre_presupuesto' => $this->faker->randomElement([true, false])
        ];
    }
}
