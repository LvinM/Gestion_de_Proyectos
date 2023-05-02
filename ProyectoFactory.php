<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=> $this->faker->unique()->numerify('####'),
            'nombre'=> $this->faker->name(),
            'descripción'=> $this->faker->words(9),
            'fecha_inicio'=> $this->faker->date(),
            'fecha_fin'=> $this->faker->date(),
        ];
    }
}
