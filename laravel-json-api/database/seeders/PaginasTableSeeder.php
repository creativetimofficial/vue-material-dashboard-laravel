<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paginas')->insert([
            ['nombre' => 'Xlove', 'moneda' => 'EUROS'],
            ['nombre' => 'LiveJazmin', 'moneda' => 'USD'],
            ['nombre' => 'StreamMate', 'moneda' => 'USD']
        ]);
    }
}
