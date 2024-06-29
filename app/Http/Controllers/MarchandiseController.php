<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marchandises;
use App\Models\import;
use App\Models\export;

class MarchandiseController extends Controller {
    public function index() {
        $FluxMarchandises = marchandises::all();
        return view('accueil', compact('FluxMarchandises'));
    }

    public function search(Request $request) {
        $marchandises_id = $request->input('marchandises_id');
        $flux = $request->input('flux');

        if ($flux == 'import') {
            $results = import::where('marchandises_id', $marchandises_id)->with('marchandises')->get();
        } else {
            $results = export::where('marchandises_id', $marchandises_id)->with('marchandises')->get();
        }

        return view('results', compact('results', 'flux'));
    }


public function getProductsByFlux($flux) {
    // Récupérer les produits en fonction du flux
    $products = marchandises::where('flux', $flux)->get();

    return response()->json(['products' => $products]);
}

}
