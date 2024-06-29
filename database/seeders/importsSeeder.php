<?php

namespace Database\Seeders;
use App\Models\import;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class importsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        import::create([
            'id' => '1',
            'quantity' => '500,000',
            'Value' =>'300,000,000',
            'Origin' => 'Nigeria, Arabie Saoudite, Angola',
            'deparure_date' => '2024-06-01',
            'arrival_date' =>'2024-06-05',
            'marchandises_id' =>'1'
        ]);

        import::create([
            'id' => '2',
            'quantity' => '20,OOO',
            'Value' =>'200,000,000',
            'deparure_date' => '2024-06-05',
            'arrival_date' =>'2024-06-20',
            'Origin' => 'Chine, Allemagne, USA',
            'marchandises_id' => '2'
            
        ]);

        import::create([
            'id' => '3',
            'quantity' => '50,000',
            'Value' =>'150,000,000',
            'deparure_date' => '2024-06-10',
            'arrival_date' =>'2024-06-25',
            'Origin' => 'Japon, France, Corée du Sud',
            'marchandises_id' => '3'
            
        ]);

        import::create([
            'id' => '4',
            'quantity' => '10,000',
            'Value' =>'100,000,000',
            'deparure_date' => '2024-06-15',
            'arrival_date' =>'2024-07-30',
            'Origin' => 'France, Inde, Suisse',
            'marchandises_id' => '4'
            
        ]);

        import::create([
            'id' => '5',
            'quantity' => '100,000',
            'Value' =>'50,000,000',
            'deparure_date' => '2024-06-20',
            'arrival_date' =>'2024-07-05',
            'Origin' => 'Thaïlande, Inde, Pakistan',
            'marchandises_id' => '5'
            
        ]);

        import::create([
            'id' => '6',
            'quantity' => '200,000',
            'Value' =>'60,000,000',
            'deparure_date' => '2024-06-25',
            'arrival_date' =>'2024-07-10',
            'Origin' => 'France, USA, Canada',
            'marchandises_id' => '6'
            
        ]);

        import::create([
            'id' => '7',
            'quantity' => '150,000',
            'Value' =>'70,000,000',
            'deparure_date' => '2024-06-30',
            'arrival_date' =>'2024-07-15',
            'Origin' => 'Brésil, Thaïlande, Inde',
            'marchandises_id' => '7'
            
        ]);

        import::create([
            'id' => '8',
            'quantity' => '80,000',
            'Value' =>'40,000,000',
            'deparure_date' => '2024-07-05',
            'arrival_date' =>'2024-07-20',
            'Origin' => 'Malaisie, Indonésie, Argentine',
            'marchandises_id' => '8'
            
        ]);

        import::create([
            'id' => '9',
            'quantity' => '50,000',
            'Value' =>'80,000,000',
            'deparure_date' => '2024-07-10',
            'arrival_date' =>'2024-07-25',
            'Origin' => 'Chine, Allemagne, USA',
            'marchandises_id' => '9'
        ]);

        import::create([
            'id' => '10',
            'quantity' => '100,000',
            'Value' =>'30,000,000',
            'deparure_date' => '2024-07-20',
            'arrival_date' =>'2024-08-05',
            'Origin' => 'Espagne, Turquie, Portugal',
            'marchandises_id' => '10'
        ]);

    }
}
