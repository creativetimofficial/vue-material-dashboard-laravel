<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            TiposCambioTableSeeder::class,
            PersonasTableSeeder::class,
            PerfilesTableSeeder::class,
            PersonasPerfilesTableSeeder::class,
            PaginasTableSeeder::class,
            PagosTableSeeder::class,
            ]);
    }
}
