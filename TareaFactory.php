<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id'=>$this->faker->unique()->numerify('####'),
            'nombre'=> $this->faker->name,
            'descripción'=>$this->faker->words(6),
            'Estado'=>$this->faker->randomElement(['Pendiente','En Progreso','Completado']),
            'fecha_inicio'=>$this->faker->date(),
            'fecha_fin'=>$this->faker->date(),
            'proyecto_id'=>$this->faker->numerify('####'),
            'usuario_id'=>$this->faker->numerify('####'),

        ];
    }
}
