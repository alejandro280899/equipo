<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->word(),
            'nombre' => fake()->word(),
            'año' => fake()->year(),
            'aforo' => rand(1,16),
            'estadio' => fake()->words(3,true),
            'ciudad' => fake()->city(),
        ];
    }
}
