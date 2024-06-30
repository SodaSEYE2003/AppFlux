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
            'quantity' => 100000,
            'value' => 150000000,
            'country_origin' => 'Nigeria',
            'departure_date' => '2024-06-01',
            'arrival_date' => '2024-06-05',
            'marchandises_id' => 1
        ]);

        import::create([
            'quantity' => 80000,
            'value' => 120000000,
            'country_origin' => 'Arabie Saoudite',
            'departure_date' => '2024-06-01',
            'arrival_date' => '2024-06-05',
            'marchandises_id' => 1
        ]);

        import::create([
            'quantity' => 50000,
            'value' => 75000000,
            'country_origin' => 'Angola',
            'departure_date' => '2024-06-01',
            'arrival_date' => '2024-06-05',
            'marchandises_id' => 1
        ]);

        import::create([
            'quantity' => 5000,
            'value' => 200000000,
            'departure_date' => '2024-06-05',
            'arrival_date' => '2024-06-20',
            'country_origin' => 'Chine',
            'marchandises_id' => 2
        ]);
        import::create([
            'quantity' => 2000,
            'value' => 150000000,
            'departure_date' => '2024-06-05',
            'arrival_date' => '2024-06-20',
            'country_origin' => 'Allemagne',
            'marchandises_id' => 2
        ]);
        import::create([
            'quantity' => 3000,
            'value' => 180000000,
            'departure_date' => '2024-06-05',
            'arrival_date' => '2024-06-20',
            'country_origin' => 'USA',
            'marchandises_id' => 2
        ]);

        import::create([
            'quantity' => 10000,
            'value' => 250000000,
            'departure_date' => '2024-06-10',
            'arrival_date' => '2024-06-25',
            'country_origin' => 'Japon',
            'marchandises_id' => 3
        ]);
        import::create([
            'quantity' => 5000,
            'value' => 150000000,
            'departure_date' => '2024-06-10',
            'arrival_date' => '2024-06-25',
            'country_origin' => 'France',
            'marchandises_id' => 3
        ]);
        import::create([
            'quantity' => 8000,
            'value' => 200000000,
            'departure_date' => '2024-06-10',
            'arrival_date' => '2024-06-25',
            'country_origin' => 'Corée du Sud',
            'marchandises_id' => 3
        ]);


        import::create([
            'quantity' => 500,
            'value' => 100000000,
            'departure_date' => '2024-06-15',
            'arrival_date' => '2024-07-30',
            'country_origin' => 'France',
            'marchandises_id' => 4
        ]);
        import::create([
            'quantity' => 800,
            'value' => 120000000,
            'departure_date' => '2024-06-15',
            'arrival_date' => '2024-07-30',
            'country_origin' => 'Inde',
            'marchandises_id' => 4
        ]);
        import::create([
            'quantity' => 300,
            'value' => 90000000,
            'departure_date' => '2024-06-15',
            'arrival_date' => '2024-07-30',
            'country_origin' => 'Suisse',
            'marchandises_id' => 4
        ]);

        import::create([
            'quantity' => 100000,
            'value' => 50000000,
            'departure_date' => '2024-06-20',
            'arrival_date' => '2024-07-05',
            'country_origin' => 'Thaïlande',
            'marchandises_id' => 5
        ]);
        import::create([
            'quantity' => 150000,
            'value' => 70000000,
            'departure_date' => '2024-06-20',
            'arrival_date' => '2024-07-05',
            'country_origin' => 'Inde',
            'marchandises_id' => 5
        ]);
        import::create([
            'quantity' => 120000,
            'value' => 60000000,
            'departure_date' => '2024-06-20',
            'arrival_date' => '2024-07-05',
            'country_origin' => 'Pakistan',
            'marchandises_id' => 5
        ]);

        import::create([
            'quantity' => 200000,
            'value' => 100000000,
            'departure_date' => '2024-06-25',
            'arrival_date' => '2024-07-10',
            'country_origin' => 'France',
            'marchandises_id' => 6
        ]);
        import::create([
            'quantity' => 150000,
            'value' => 80000000,
            'departure_date' => '2024-06-25',
            'arrival_date' => '2024-07-10',
            'country_origin' => 'USA',
            'marchandises_id' => 6
        ]);
        import::create([
            'quantity' => 120000,
            'value' => 70000000,
            'departure_date' => '2024-06-25',
            'arrival_date' => '2024-07-10',
            'country_origin' => 'Canada',
            'marchandises_id' => 6
        ]);

        import::create([
            'quantity' => 150000,
            'value' => 80000000,
            'departure_date' => '2024-06-30',
            'arrival_date' => '2024-07-15',
            'country_origin' => 'Brésil',
            'marchandises_id' => 7
        ]);
        import::create([
            'quantity' => 120000,
            'value' => 70000000,
            'departure_date' => '2024-06-30',
            'arrival_date' => '2024-07-15',
            'country_origin' => 'Thaïlande',
            'marchandises_id' => 7
        ]);
        import::create([
            'quantity' => 100000,
            'value' => 60000000,
            'departure_date' => '2024-06-30',
            'arrival_date' => '2024-07-15',
            'country_origin' => 'Inde',
            'marchandises_id' => 7
        ]);

        import::create([
            'quantity' => 80000,
            'value' => 60000000,
            'departure_date' => '2024-07-05',
            'arrival_date' => '2024-07-20',
            'country_origin' => 'Malaisie',
            'marchandises_id' => 8
        ]);
        import::create([
            'quantity' => 100000,
            'value' => 70000000,
            'departure_date' => '2024-07-05',
            'arrival_date' => '2024-07-20',
            'country_origin' => 'Indonésie',
            'marchandises_id' => 8
        ]);
        import::create([
            'quantity' => 50000,
            'value' => 40000000,
            'departure_date' => '2024-07-05',
            'arrival_date' => '2024-07-20',
            'country_origin' => 'Argentine',
            'marchandises_id' => 8
        ]);

        import::create([
            'quantity' => 200000,
            'value' => 150000000,
            'departure_date' => '2024-07-10',
            'arrival_date' => '2024-07-25',
            'country_origin' => 'Chine',
            'marchandises_id' => 9
        ]);
        import::create([
            'quantity' => 100000,
            'value' => 120000000,
            'departure_date' => '2024-07-10',
            'arrival_date' => '2024-07-25',
            'country_origin' => 'Allemagne',
            'marchandises_id' => 9
        ]);
        import::create([
            'quantity' => 150000,
            'value' => 180000000,
            'departure_date' => '2024-07-10',
            'arrival_date' => '2024-07-25',
            'country_origin' => 'USA',
            'marchandises_id' => 9
        ]);

        import::create([
            'quantity' => 150000,
            'value' => 80000000,
            'departure_date' => '2024-07-20',
            'arrival_date' => '2024-08-05',
            'country_origin' => 'Espagne',
            'marchandises_id' => 10
        ]);
        import::create([
            'quantity' => 120000,
            'value' => 70000000,
            'departure_date' => '2024-07-20',
            'arrival_date' => '2024-08-05',
            'country_origin' => 'Turquie',
            'marchandises_id' => 10
        ]);
        import::create([
            'quantity' => 100000,
            'value' => 60000000,
            'departure_date' => '2024-07-20',
            'arrival_date' => '2024-08-05',
            'country_origin' => 'Portugal',
            'marchandises_id' => 10
        ]);
    }

}
