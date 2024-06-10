<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasPerfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas_perfiles')->insert([
            ['persona_id' => 1, 'perfil_id' => 1],
            ['persona_id' => 1, 'perfil_id' => 5],
            ['persona_id' => 2, 'perfil_id' => 4]
        ]);
    }
}
