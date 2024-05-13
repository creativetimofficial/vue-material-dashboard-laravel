<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagos')->insert([
            ['persona_id' => 1, 'pagina_id' => 1, 'monto' => 1500.00, 'horas_trabajadas' => 40, 'porcentaje_ganancia' => 50.0, 'tipo_cambio_id' => 1 ],
            ['persona_id' => 1, 'pagina_id' => 2, 'monto' => 3000.00, 'horas_trabajadas' => 46, 'porcentaje_ganancia' => 60.0, 'tipo_cambio_id' => 1 ],
            ['persona_id' => 2, 'pagina_id' => 3, 'monto' => 2200.00, 'horas_trabajadas' => 48, 'porcentaje_ganancia' => 70.0, 'tipo_cambio_id' => 1 ]
        ]);
    }
}
