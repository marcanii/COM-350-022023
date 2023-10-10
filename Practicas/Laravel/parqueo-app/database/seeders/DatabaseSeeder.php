<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ClienteSeeder;
use Database\Seeders\TarifaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // llama a cliente seeder
        $this->call(ClienteSeeder::class);
        // llama a tarifa seeder
        $this->call(TarifaSeeder::class);
        // llama a tipos documento seeder
        $this->call(TiposDocumentoSeeder::class);
    }
}
