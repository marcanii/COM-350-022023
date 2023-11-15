<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Editorial::create([
            'id' => 1,
            'nombre' => 'E1'
        ]);
        Editorial::create([
            'id' => 2,
            'nombre' => 'E2'
        ]);
        Editorial::create([
            'id' => 3,
            'nombre' => 'E3'
        ]);
        Editorial::create([
            'id' => 4,
            'nombre' => 'E4'
        ]);
        Editorial::create([
            'id' => 5,
            'nombre' => 'E5'
        ]);
        Editorial::create([
            'id' => 6,
            'nombre' => 'E6'
        ]);
        Editorial::create([
            'id' => 7,
            'nombre' => 'E7'
        ]);
        Editorial::create([
            'id' => 8,
            'nombre' => 'E8'
        ]);
        Editorial::create([
            'id' => 9,
            'nombre' => 'E9'
        ]);
        Editorial::create([
            'id' => 10,
            'nombre' => 'E10'
        ]);
    }
}
