<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pago>
 */
class PagoFactory extends Factory
{
    protected $model = Pago::class;

    public function definition(): array
    {
        return [
            'persona_id' => $this->faker->numberBetween(1, 50),
            'pagina_id' => $this->faker->numberBetween(1, 3),
            'monto' => $this->faker->numberBetween(100, 10000),
            'horas_trabajadas' => $this->faker->numberBetween(30, 60),
            'porcentaje_ganancia' => $this->faker->randomElement([50.0, 60.0, 70.0])
        ];
    }
}
