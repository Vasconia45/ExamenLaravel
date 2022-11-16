<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Escuderia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piloto>
 */
class PilotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'fecha_nacimiento' => $this->faker->date(),
            'numero_licencia' => $this->faker->randomNumber(4, true),
            'victorias' => $this->faker->numberBetween(0, 300),
            'escuderia_id' => Escuderia::all()->random()->id
        ];
    }
}
