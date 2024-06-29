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
            'id' => '1',
            'quantity' => ' 50,000',
            'Value' =>'20,000,000',
            'deparure_date' => '2024-06-01',
            'arrival_date' =>'2024-06-15',
            'main_destination' => 'Chine, France, Inde',
            'marchandises_id' => '11'
        ]);

        export::create([
            'id' => '2',
            'quantity' => ' 30,000',
            'Value' =>'100,000,000',
            'deparure_date' => '2024-06-05',
            'arrival_date' =>'2024-06-20',
            'main_destination' => 'Espagne, Japon, Italie',
            'marchandises_id' => '12'
        ]);

        export::create([
            'id' => '3',
            'quantity' => ' 200,000',
            'Value' =>'150,000,000',            
            'deparure_date' => '2024-06-10',
            'arrival_date' =>'2024-06-25',
            'main_destination' => 'USA, Inde, Brésil',
            'marchandises_id' => '13'
        ]);

        export::create([
            'id' => '4',
            'quantity' => ' 50,000',
            'Value' =>'250,000,000', 
            'deparure_date' => '2024-06-15',
            'arrival_date' =>'2024-06-30',
            'main_destination' => 'Suisse, Émirats Arabes Unis',
            'marchandises_id' => '14'
        ]);

        export::create([
            'id' => '5',
            'quantity' => ' 100,000',
            'Value' =>'15,000,000', 
            'deparure_date' => '2024-06-20',
            'arrival_date' =>'2024-07-05',
            'main_destination' => ' Mali, Gambie, Guinée',
            'marchandises_id' => '15'
        ]);

        export::create([
            'id' => '6',
            'quantity' => ' 10,000',
            'Value' =>'30,000,000', 
            'deparure_date' => '2024-06-25',
            'arrival_date' =>'2024-07-10',
            'main_destination' => ' USA, France, Italie',
            'marchandises_id' => '16'
        ]);

        export::create([
            'id' => '7',
            'quantity' => ' 15,000',
            'Value' =>'25,000,000', 
            'deparure_date' => '2024-06-30',
            'arrival_date' =>'2024-07-15',
            'main_destination' => 'Chine, Bangladesh, Vietnam',
            'marchandises_id' => '17'
        ]);

        export::create([
            'id' => '8',
            'quantity' => ' 20,000',
            'Value' =>'50,000,000', 
            'deparure_date' => '2024-07-05',
            'arrival_date' =>'2024-07-20',
            'main_destination' => ' Nigeria, Côte dIvoire, Ghana',
            'marchandises_id' => '18'
        ]);

        export::create([
            'id' => '9',
            'quantity' => ' 8,000',
            'Value' =>'40,000,000', 
            'deparure_date' => '2024-07-10',
            'arrival_date' =>'2024-07-25',
            'main_destination' => 'Chine, Corée du Sud, Japon',
            'marchandises_id' => '19'
        ]);

        export::create([
            'id' => '10',
            'quantity' => ' 50,000',
            'Value' =>'20,000,000', 
            'deparure_date' => '2024-07-15',
            'arrival_date' =>'2024-07-30',
            'main_destination' => 'Mali, Mauritanie, Gambie',
            'marchandises_id' => '20'
        ]);




        
    }
}
