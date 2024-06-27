<?php

namespace Database\Seeders;

use App\Models\marchandises;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class marchandisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        marchandises::create([
            'Descrption' => '',
            'Quantité' => '',
            'Valeur' =>'',
            'Origine' => '',
            'Destination' => '',
            'DocumentsAssocies' => '',
        ]);
    }
}
