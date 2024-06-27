<?php

namespace Database\Seeders;

use App\Models\analyste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class analysteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        analyste::create([
            'Prenom' => 'Marème Soda',
            'Nom' => 'Sèye',
        ]);
    }
}
