<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perfiles')->insert([
            ['nombre' => 'Modelo'],
            ['nombre' => 'Monitor'],
            ['nombre' => 'Jefe de monitores'],
            ['nombre' => 'Fotógrafo'],
            ['nombre' => 'Administrador']
        ]);

    }
}
