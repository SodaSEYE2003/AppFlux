<?php

namespace Database\Seeders;

use App\Models\client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        client::create([
            'Prenom' => 'Marème Soda',
            'Nom' => 'Sèye',
        ]);
    }
}
