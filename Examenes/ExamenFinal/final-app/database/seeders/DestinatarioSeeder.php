<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destinatario;

class DestinatarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destinatario::create([
            'id' => 1,
            'nombre' => 'Maria',
            'cargo' => 'admin'
        ]);
        Destinatario::create([
            'id' => 2,
            'nombre' => 'Juan',
            'cargo' => 'cajero'
        ]);
        Destinatario::create([
            'id' => 3,
            'nombre' => 'Jose',
            'cargo' => 'oficina'
        ]);
    }
}
