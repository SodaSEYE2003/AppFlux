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
        marchandises ::create([
            'name' => 'Petrole brut'
        ]);

        marchandises ::create([
            'name' => 'Machines et equipements'
        ]);

        marchandises ::create([
            'name' => 'Vehicules'
        ]);

        marchandises ::create([
            'name' => 'Produits Pharmaceutiques'
        ]);
        marchandises ::create([
            'name' => 'Riz'
        ]);

        marchandises ::create([
            'name' => 'blé'
        ]);

        marchandises ::create([
            'name' => 'Sucre'
        ]);

        marchandises ::create([
            'name' => 'Huiles Végétales'
        ]);

        marchandises ::create([
            'name' => 'Produits chimiques'
        ]);

        marchandises ::create([
            'name' => 'Ciments'
        ]);

        marchandises ::create([
            'name' => 'Arachides'
        ]);

        marchandises ::create([
            'name' => 'Poissons et Fruits de mer'
        ]);

        marchandises ::create([
            'name' => 'Or'
        ]);

        marchandises ::create([
            'name' => 'Ciments'
        ]);

        marchandises ::create([
            'name' => 'Produits Textiles'
        ]);

        marchandises ::create([
            'name' => 'Coton'
        ]);

        marchandises ::create([
            'name' => 'Produits Chimiques'
        ]);

        marchandises ::create([
            'name' => 'Cuivre'
        ]);

        marchandises ::create([
            'name' => 'Engrais'
        ]);

        marchandises ::create([
            'name' => 'Fruits et légumes'
        ]);

    }
}
