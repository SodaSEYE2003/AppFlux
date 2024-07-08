<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marchandises;
class MarchandiseController extends Controller
{
    public function liste_marchandise()
    {
        $marchandises= marchandises::all();
        return view('admin.TableMarchandises', compact('marchandises'));
    }
   
    
    public function ajouter_marchandise()
    {
        return view('marchandise.ajouterMarchandise');
    }
    public function ajouter_marchandise_traitement(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'annee'=>'required',
            'quantite'=>'required',
            'valeur'=>'required',
            'TypeFlux'=>'required',
            'pays'=>'required',
        ]);
        $Marchandise = new marchandises();
        $Marchandise->name = $request->name;
        $Marchandise->description = $request->description;
        $Marchandise->annee = $request->annee;
        $Marchandise->quantite = $request->quantite;
        $Marchandise->valeur = $request->valeur;
        $Marchandise->TypeFlux = $request->TypeFlux;
        $Marchandise->pays = $request->pays;
        $Marchandise->save();

        return redirect('/ajouterMarchandise')->with('status','La marchandise a bien été ajoutée avec succés.');
    }
    public function  update_marchandise($id)
    {
        $marchandises = marchandises::find($id);
        return view('marchandise.updateMarchandise', compact('marchandises'));
    }
    public function  update_marchandise_traitement(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'annee'=>'required',
            'quantite'=>'required',
            'valeur'=>'required',
            'TypeFlux'=>'required',
            'pays'=>'required',
        ]);
        $Marchandise = marchandises::find($request->id);;
        $Marchandise->name = $request->name;
        $Marchandise->description = $request->description;
        $Marchandise->annee = $request->annee;
        $Marchandise->quantite = $request->quantite;
        $Marchandise->valeur = $request->valeur;
        $Marchandise->TypeFlux = $request->TypeFlux;
        $Marchandise->pays = $request->pays;
        $Marchandise->update();
        return redirect('/marchandise')->with('status','La marchandise a été modifiée avec succés.');
    }
    public function  delete_marchandise($id)
    {
        $marchandises = marchandises::find($id);
        $marchandises->delete();
        return redirect('/marchandise')->with('status','La marchandise a été supprimée.');
    }

    // Exemple dans votre contrôleur
public function showChart()
{
    $marchandises = marchandises::all(); // Récupérez toutes les marchandises

    $labels = $marchandises->pluck('pays')->toArray(); // Tableau des pays
    $data = $marchandises->pluck('valeur')->toArray(); // Tableau des valeurs
    $donnees=$marchandises->pluck('quantite')->toArray(); // Tableau des quantites
    $annees=$marchandises->pluck('annee')->toArray(); // Tableau des années
    $nombreExportations = Marchandises::where('TypeFlux', 'export')->count();
    $nombreImportations = Marchandises::where('TypeFlux', 'import')->count();
    
    return view('admin.Diagrammes', compact('labels', 'data', 'donnees', 'annees','nombreExportations', 'nombreImportations'));
}
public function Diag()
{
    $marchandises = marchandises::all(); // Récupérez toutes les marchandises

    $labels = $marchandises->pluck('pays')->toArray(); // Tableau des pays
    $data = $marchandises->pluck('valeur')->toArray(); // Tableau des valeurs
    $donnees=$marchandises->pluck('quantite')->toArray(); // Tableau des quantites
    $annees=$marchandises->pluck('annee')->toArray(); // Tableau des années
    $nombreExportations = Marchandises::where('TypeFlux', 'export')->count();
    $nombreImportations = Marchandises::where('TypeFlux', 'import')->count();
    
    return view('analyste.dashboardAnalyste', compact('marchandises','labels', 'data', 'donnees', 'annees','nombreExportations', 'nombreImportations'));
}

public function Total(){
    $marchandises = Marchandises::all();

    // Calculer la valeur totale des marchandises
    $valeurTotale = Marchandises::sum('valeur');

    // Calculer la quantité totale des marchandises
    $quantiteTotale = Marchandises::sum('quantite');

    // Calculer le nombre total d'exportations
    $nombreExportations = Marchandises::where('TypeFlux', 'export')->count();

    // Calculer le nombre total d'importations
    $nombreImportations = Marchandises::where('TypeFlux', 'import')->count();
    $totalFlux = $nombreExportations + $nombreImportations;

    // Calcul des pourcentages
    $pourcentageExportations = ($totalFlux > 0) ? ($nombreExportations / $totalFlux) * 100 : 0;
    $pourcentageImportations = ($totalFlux > 0) ? ($nombreImportations / $totalFlux) * 100 : 0;


    return view('admin.dashboard', compact('marchandises', 'valeurTotale', 'quantiteTotale', 'nombreExportations', 'nombreImportations', 'pourcentageExportations','pourcentageImportations'));
}
   
}