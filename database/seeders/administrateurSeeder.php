<?php

namespace Database\Seeders;

use App\Models\administrateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class administrateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        administrateur::create([
            'Prenom' => 'Marème Soda',
            'Nom' => 'Sèye',
        ]);
    }
}
