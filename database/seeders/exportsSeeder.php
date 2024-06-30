<?php

namespace Database\Seeders;

use App\Models\export;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class exportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        export::create([
            'quantity' => 50000,
            'value' =>40000000,
            'departure_date' => '2024-06-01',
            'arrival_date' =>'2024-06-15',
            'main_destinations' => 'Chine',
            'marchandises_id' => 11
        ]);
        export::create([
            'quantity' => 30000,
            'value' =>35000000,
            'departure_date' => '2024-06-01',
            'arrival_date' =>'2024-06-15',
            'main_destinations' => 'France',
            'marchandises_id' => 11
        ]);
        export::create([
            'quantity' => 25000,
            'value' =>30000000,
            'departure_date' => '2024-06-01',
            'arrival_date' =>'2024-06-15',
            'main_destinations' => 'Inde',
            'marchandises_id' => 11
        ]);

        export::create([
            'quantity' => 10000,
            'value' =>50000000,
            'departure_date' => '2024-06-05',
            'arrival_date' =>'2024-06-20',
            'main_destinations' => 'Espagne',
            'marchandises_id' => 12
        ]);
        export::create([
            'quantity' => 8000,
            'value' =>60000000,
            'departure_date' => '2024-06-05',
            'arrival_date' =>'2024-06-20',
            'main_destinations' => 'Japon',
            'marchandises_id' => 12
        ]);
        export::create([
            'quantity' => 5000,
            'value' =>40000000,
            'departure_date' => '2024-06-05',
            'arrival_date' =>'2024-06-20',
            'main_destinations' => 'Italie',
            'marchandises_id' => 12
        ]);

        export::create([
            'quantity' => 5,
            'value' =>250000000 ,            
            'departure_date' => '2024-06-10',
            'arrival_date' =>'2024-06-25',
            'main_destinations' => 'USA',
            'marchandises_id' => 13
        ]);
        export::create([
            'quantity' => 3,
            'value' =>150000000 ,            
            'departure_date' => '2024-06-10',
            'arrival_date' =>'2024-06-25',
            'main_destinations' => 'Inde',
            'marchandises_id' => 13
        ]);
        export::create([
            'quantity' => 2,
            'value' =>100000000 ,            
            'departure_date' => '2024-06-10',
            'arrival_date' =>'2024-06-25',
            'main_destinations' => 'Brésil',
            'marchandises_id' => 13
        ]);

        export::create([
            'quantity' =>  50000,
            'value' =>30000000, 
            'departure_date' => '2024-06-15',
            'arrival_date' =>'2024-06-30',
            'main_destinations' => 'Suisse',
            'marchandises_id' => 14
        ]);
        export::create([
            'quantity' =>  30000,
            'value' =>25000000, 
            'departure_date' => '2024-06-15',
            'arrival_date' =>'2024-06-30',
            'main_destinations' => 'Émirats Arabes Unis',
            'marchandises_id' => 14
        ]);

        export::create([
            'quantity' => 100000,
            'value' =>10000000, 
            'departure_date' => '2024-06-20',
            'arrival_date' =>'2024-07-05',
            'main_destinations' => ' Mali',
            'marchandises_id' => 15
        ]);
        export::create([
            'quantity' => 500000,
            'value' =>5000000, 
            'departure_date' => '2024-06-20',
            'arrival_date' =>'2024-07-05',
            'main_destinations' => 'Gambie',
            'marchandises_id' => 15
        ]);
        export::create([
            'quantity' => 80000,
            'value' =>8000000, 
            'departure_date' => '2024-06-20',
            'arrival_date' =>'2024-07-05',
            'main_destinations' => 'Guinée',
            'marchandises_id' => 15
        ]);

        export::create([
            'quantity' => 20000 ,
            'value' =>15000000, 
            'departure_date' => '2024-06-25',
            'arrival_date' =>'2024-07-10',
            'main_destinations' => 'USA',
            'marchandises_id' => 16
        ]);
        export::create([
            'quantity' => 15000 ,
            'value' =>12000000, 
            'departure_date' => '2024-06-25',
            'arrival_date' =>'2024-07-10',
            'main_destinations' => 'France',
            'marchandises_id' => 16
        ]);
        export::create([
            'quantity' => 10000 ,
            'value' =>8000000, 
            'departure_date' => '2024-06-25',
            'arrival_date' =>'2024-07-10',
            'main_destinations' => 'Italie',
            'marchandises_id' => 16
        ]);

        export::create([
            'quantity' => 30000,
            'value' =>25000000 , 
            'departure_date' => '2024-06-30',
            'arrival_date' =>'2024-07-15',
            'main_destinations' => 'Chine',
            'marchandises_id' => 17
        ]);
        export::create([
            'quantity' => 20000,
            'value' =>15000000 , 
            'departure_date' => '2024-06-30',
            'arrival_date' =>'2024-07-15',
            'main_destinations' => 'Bangladesh',
            'marchandises_id' => 17
        ]);
        export::create([
            'quantity' => 15000,
            'value' =>12000000 , 
            'departure_date' => '2024-06-30',
            'arrival_date' =>'2024-07-15',
            'main_destinations' => 'Vietnam',
            'marchandises_id' => 17
        ]);

        export::create([
            'quantity' => 15000 ,
            'value' =>20000000 , 
            'departure_date' => '2024-07-05',
            'arrival_date' =>'2024-07-20',
            'main_destinations' => ' Nigeria',
            'marchandises_id' => 18
        ]);
        export::create([
            'quantity' => 10000 ,
            'value' =>15000000 , 
            'departure_date' => '2024-07-05',
            'arrival_date' =>'2024-07-20',
            'main_destinations' => 'Côte dIvoire',
            'marchandises_id' => 18
        ]);
        export::create([
            'quantity' => 8000 ,
            'value' =>12000000 , 
            'departure_date' => '2024-07-05',
            'arrival_date' =>'2024-07-20',
            'main_destinations' => 'Ghana',
            'marchandises_id' => 18
        ]);

        export::create([
            'quantity' =>  25000 ,
            'value' =>30000000 , 
            'departure_date' => '2024-07-10',
            'arrival_date' =>'2024-07-25',
            'main_destinations' => 'Chine',
            'marchandises_id' => 19
        ]);
        export::create([
            'quantity' =>  15000 ,
            'value' =>20000000 , 
            'departure_date' => '2024-07-10',
            'arrival_date' =>'2024-07-25',
            'main_destinations' => 'Corée du Sud',
            'marchandises_id' => 19
        ]);
        export::create([
            'quantity' =>  10000 ,
            'value' =>15000000 , 
            'departure_date' => '2024-07-10',
            'arrival_date' =>'2024-07-25',
            'main_destinations' => 'Japon',
            'marchandises_id' => 19
        ]);

        export::create([
            'quantity' =>12000 ,
            'value' =>15000000 , 
            'departure_date' => '2024-07-15',
            'arrival_date' =>'2024-07-30',
            'main_destinations' => 'Mali',
            'marchandises_id' => 20
        ]);
        export::create([
            'quantity' =>8000 ,
            'value' =>10000000 , 
            'departure_date' => '2024-07-15',
            'arrival_date' =>'2024-07-30',
            'main_destinations' => 'Mauritanie',
            'marchandises_id' => 20
        ]);
        export::create([
            'quantity' =>5000 ,
            'value' =>7000000 , 
            'departure_date' => '2024-07-15',
            'arrival_date' =>'2024-07-30',
            'main_destinations' => 'Gambie',
            'marchandises_id' => 20
        ]);




        
    }
}
