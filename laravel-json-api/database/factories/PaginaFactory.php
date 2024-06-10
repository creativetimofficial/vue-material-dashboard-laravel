<?php

namespace Database\Factories;

use App\Models\Pagina;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */
class PaginaFactory extends Factory
{
    protected $model = Pagina::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['Xlove', 'LiveJazmin', 'StreamMate']),
            'moneda' => $this->faker->randomElement(['EUROS', 'USD'])
        ];
    }
}

