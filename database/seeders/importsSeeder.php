<?php

namespace Database\Seeders;
use App\Models\import;
use Illuminate\Database\Seeder;

class importsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        import::create([
            'quantity' => 500000,
            'value' => 300000000,
            'country_origin' => 'Nigeria, Arabie Saoudite, Angola',
            'departure_date' => '2024-06-01',
            'arrival_date' => '2024-06-05',
            'marchandises_id' => 1
        ]);

        import::create([
            'quantity' => 20000,
            'value' => 200000000,
            'departure_date' => '2024-06-05',
            'arrival_date' => '2024-06-20',
            'country_origin' => 'Chine, Allemagne, USA',
            'marchandises_id' => 2
        ]);

        import::create([
            'quantity' => 50000,
            'value' => 150000000,
            'departure_date' => '2024-06-10',
            'arrival_date' => '2024-06-25',
            'country_origin' => 'Japon, France, Corée du Sud',
            'marchandises_id' => 3
        ]);

        import::create([
            'quantity' => 10000,
            'value' => 100000000,
            'departure_date' => '2024-06-15',
            'arrival_date' => '2024-07-30',
            'country_origin' => 'France, Inde, Suisse',
            'marchandises_id' => 4
        ]);

        import::create([
            'quantity' => 100000,
            'value' => 50000000,
            'departure_date' => '2024-06-20',
            'arrival_date' => '2024-07-05',
            'country_origin' => 'Thaïlande, Inde, Pakistan',
            'marchandises_id' => 5
        ]);

        import::create([
            'quantity' => 200000,
            'value' => 60000000,
            'departure_date' => '2024-06-25',
            'arrival_date' => '2024-07-10',
            'country_origin' => 'France, USA, Canada',
            'marchandises_id' => 6
        ]);

        import::create([
            'quantity' => 150000,
            'value' => 70000000,
            'departure_date' => '2024-06-30',
            'arrival_date' => '2024-07-15',
            'country_origin' => 'Brésil, Thaïlande, Inde',
            'marchandises_id' => 7
        ]);

        import::create([
            'quantity' => 80000,
            'value' => 40000000,
            'departure_date' => '2024-07-05',
            'arrival_date' => '2024-07-20',
            'country_origin' => 'Malaisie, Indonésie, Argentine',
            'marchandises_id' => 8
        ]);

        import::create([
            'quantity' => 50000,
            'value' => 80000000,
            'departure_date' => '2024-07-10',
            'arrival_date' => '2024-07-25',
            'country_origin' => 'Chine, Allemagne, USA',
            'marchandises_id' => 9
        ]);

        import::create([
            'quantity' => 100000,
            'value' => 30000000,
            'departure_date' => '2024-07-20',
            'arrival_date' => '2024-08-05',
            'country_origin' => 'Espagne, Turquie, Portugal',
            'marchandises_id' => 10
        ]);
    }
}
