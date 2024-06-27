<?php

namespace Database\Seeders;

use App\Models\douane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class douaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        douane::create([
            'Prenom' => 'Marème Soda',
            'Nom' => 'Sèye',
        ]);
    }
}
