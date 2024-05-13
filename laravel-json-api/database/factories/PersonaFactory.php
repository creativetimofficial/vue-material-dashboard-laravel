<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    protected $model = Persona::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'tipo_documento' => $this->faker->randomElement(['CC', 'TI', 'CE']),
            'documento' => $this->faker->unique()->numerify('##########')
        ];
    }
}
