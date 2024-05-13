<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas')->insert([
            ['nombre' => 'Ana López', 'tipo_documento' => 'CC', 'documento' => '1234567890'],
            ['nombre' => 'Carlos Gómez', 'tipo_documento' => 'TI', 'documento' => '0987654321']
        ]);

    }
}
