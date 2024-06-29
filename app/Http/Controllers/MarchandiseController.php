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
        $country = $request->input('country');

        if ($flux == 'import') {
            $results = import::where('marchandises_id', $marchandises_id)->where('country_origin', $country)->get();
        } else {
            $results = export::where('marchandises_id', $marchandises_id)->where('main_destinations', 'LIKE', "%{$country}%")->get();
        }

        return view('results', compact('results', 'flux', 'country'));
    }
}
