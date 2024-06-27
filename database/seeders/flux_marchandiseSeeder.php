<?php

namespace Database\Seeders;

use App\Models\flux_marchandise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class flux_marchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        flux_marchandise::create([
            'TypeFLux' => '',
            'DateDepart' => '',
            'DateArrivee' =>'',
            'Status' => ''
        ]);
    }
}
