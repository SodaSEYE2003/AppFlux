<?php

namespace Database\Seeders;

use App\Models\rapport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rapportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        rapport::create([
            'Type' => '',
            'Date' => '',
            'Contenue' =>'',
        ]);
    }
}
