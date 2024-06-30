<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marchandises;
use App\Models\import;
use App\Models\export;

class MarchandiseController extends Controller {
    public function index()
    {
        $FluxMarchandises = marchandises::all();
        return view('accueil', compact('FluxMarchandises'));
    }

    public function search(Request $request)
    {
        $marchandises_id = $request->input('marchandises_id');
        $flux = $request->input('flux');

        if ($flux == 'import') {
            $results = import::where('marchandises_id', $marchandises_id)->with('marchandise')->get();
        } else {
            $results = export::where('marchandises_id', $marchandises_id)->with('marchandise')->get();
        }

        return view('results', compact('results', 'flux'));
    }

    public function getProductsByFlux($flux)
{
    
    if ($flux == 'import') {
        $productIds = import::pluck('marchandises_id')->unique();
    } else {
        $productIds = export::pluck('marchandises_id')->unique();
    }

    $products = marchandises::whereIn('id', $productIds)->get(['id', 'name']); // Assurez-vous de récupérer les colonnes id et name

    return response()->json(['products' => $products]);
}
/*public function showSearchForm()
{
    // Logique pour afficher le formulaire de recherche
    return view('search_form');
}*/

// Méthode pour afficher les résultats en fonction du flux (import ou export)
/*public function showResults(Request $request)
{
    $fluxType = $request->input('flux'); // Récupérer le type de flux (import ou export)
    $results = null;
    $labels = null;

    if ($fluxType == 'export') {
        $results = export::all(); // Récupérer les exportations
        $labels = $results->pluck('main_destinations'); // Pays d'origine pour les exportations
    } else {
        $results = import::all(); // Récupérer les importations
        $labels = $results->pluck('country_origin'); // Pays de destination pour les importations
    }

    return view('results', compact('results', 'labels', 'fluxType'));
}*/
}
