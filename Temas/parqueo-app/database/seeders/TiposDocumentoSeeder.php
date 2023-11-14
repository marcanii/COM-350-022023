<?php

namespace Database\Seeders;

use App\Models\TiposDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TiposDocumento::create(
            [
                'id' => 1,
                'descripcion' => 'Carnet de identidad'
            ]);
            TiposDocumento::create([
                'id' => 2,
                'descripcion' => 'Passapoerte'
            ]);
            TiposDocumento::create([
                'id' => 3,
                'descripcion' => 'Carnet de Extranjero'
            ]);
            TiposDocumento::create([
                'id' => 4,
                'descripcion' => 'Librera'
            ]);
            TiposDocumento::create([
                'id' => 5,
                'descripcion' => 'NIT'
            ]);
        
    }
}
