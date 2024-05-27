<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TiposCambioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_cambio')->insert([
            ['fecha' => '2024-01-01', 'valor_dolar' => 3500.00, 'valor_euro' => 3700.00],
            ['fecha' => '2024-01-08', 'valor_dolar' => 3550.00, 'valor_euro' => 3800.00]
        ]);
    }
}
