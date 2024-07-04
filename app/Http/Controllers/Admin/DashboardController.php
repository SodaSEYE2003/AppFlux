<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\marchandises;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $marchandises = marchandises::all();

        // Calculer des statistiques et préparer les données pour les graphiques
        $totalQuantite = $marchandises->sum('quantite');
        $totalValeur = $marchandises->sum('valeur');

        // Passer les données à la vue
        return view('admin.dashboard', compact('totalQuantite', 'totalValeur', 'marchandises'));
    }
}
