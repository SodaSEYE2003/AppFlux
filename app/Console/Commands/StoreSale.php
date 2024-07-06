<?php

namespace App\Console\Commands;

use App\Models\marchandises;
use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class StoreSale extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'enregitre les imports et exports du Sénégal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $worksheet = $this ->getActiveSheet(storage_path(path:'data/import.xlsx'));
        $worksheet = $this ->getActiveSheet(storage_path(path:'data/export.xlsx'));

        $counter = 0;

        foreach($worksheet -> getRowIterator() as $row){
            if($counter ++=== 0) continue;
            $cellIterator = $row -> getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(value:true);

            $cells = [];

            foreach($cellIterator as $cell)
            {
                $cells[] = $cell -> getValue();
            }

            marchandises::create([
                'name' => $cells[0],
                'description' => $cells[1],
                'annee' => $cells[2],
                'quantite' => $cells[3],
                'valeur'=> $cells[4],
                'TypeFlux' => $cells[5],
                'pays'=> $cells[6]
            ]);
        }

        $this -> comment('Les imformations sont enregistrer avec Succès');
    }
    private function getActiveSheet(string $path): Worksheet
    {
        return(new Xlsx)
        ->load($path)
        ->getActiveSheet();
        
    }
}
