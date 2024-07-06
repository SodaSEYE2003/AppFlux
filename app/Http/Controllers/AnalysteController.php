<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\analyste;
class AnalysteController extends Controller
{
    public function liste_analyste()
    {
        $analystes= analyste::all();
        return view('admin.TableAnalyste', compact('analystes'));
    }
    
    public function ajouter_analyste()
    {
        return view('admin.register');
    }
    public function ajouter_analyste_traitement(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Prenom'=>'required',
            'Email'=>'required',
            'MotdePasse'=>'required',
        ]);
        $Analyste = new analyste();
        $Analyste->Nom = $request->Nom;
        $Analyste->Prenom = $request->Prenom;
        $Analyste->Email = $request->Email;
        $Analyste->MotdePasse = $request->MotdePasse;
        $Analyste->save();

        return redirect('/ajouter')->with('status','L\'analyste a bien été ajouté avec succés.');
    }
    public function  update_analyste($id)
    {
        $analystes = analyste::find($id);
        return view('admin.ModifierAnalyste', compact('analystes'));
    }
    public function  update_analyste_traitement(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Prenom'=>'required',
            'Email'=>'required',
            'MotdePasse'=>'required',
        ]);
        $Analyste = analyste::find($request->id);
        $Analyste->Nom = $request->Nom;
        $Analyste->Prenom = $request->Prenom;
        $Analyste->Email = $request->Email;
        $Analyste->MotdePasse = $request->MotdePasse;
        $Analyste->update();
        return redirect('/TableAnalyste')->with('status','L\'analyste a été modifié avec succés.');
    }
    public function  delete_analyste($id)
    {
        $analystes = analyste::find($id);
        $analystes->delete();
        return redirect('/analyste')->with('status','L\'analyste a été supprimé.');
    }

    //Connexion 
    public function signIn()
{
    $analystes = analyste::all();
    return view('signIn', ['analystes' => $analystes]);
}
   
}