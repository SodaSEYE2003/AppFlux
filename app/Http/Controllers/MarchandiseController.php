<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marchandises;
class MarchandiseController extends Controller
{
    public function liste_marchandise()
    {
        $marchandises= marchandises::all();
        return view('marchandise.listeMarchandise', compact('marchandises'));
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
        return redirect('')->route('liste');
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

    public function liste()
    {
        $produit = marchandises::all();
        return view('liste',compact('produit'));
    }
   
}