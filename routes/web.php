<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarchandiseController;
use App\Http\Controllers\AnalysteController;
use App\Models\marchandises;

// Route pour afficher la vue 'accueil'
Route::get('/', function () {
    return view('accueil');
})->name('home');

// Routes contrôlées par MarchandiseController
//Route::get('/', [MarchandiseController::class, 'index'])->name('home');
/*Route::post('/search', [MarchandiseController::class, 'search'])->name('search');

Route::get('/results', function () {
    return view('results');
})->name('results');*/

// Route pour afficher la vue 'signUp'
Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');



Route::get('/signIn', [AnalysteController::class, 'listeAnalyste'])->name('signIn');;
Route::get('/dashboardAnalyste', [MarchandiseController::class, 'Diag'])->name('dashboardAnalyste');
Route::get('/dashboard', [MarchandiseController::class, 'Total'])->name('dashboard');
Route::get('/Diagrammes', [MarchandiseController::class, 'showChart'])->name('Diagrammes');
// Gestion Analyste
Route::get('/analyste', [AnalysteController::class, 'liste_analyste']);
Route::get('/ajouter', [AnalysteController::class, 'ajouter_analyste']);
Route::post('/ajouter/traitement', [AnalysteController::class, 'ajouter_analyste_traitement']);
Route::get('/update_analyste/{id}', [AnalysteController::class, 'update_analyste']);
Route::post('/update/traitement', [AnalysteController::class, 'update_analyste_traitement']);
Route::get('/delete_analyste/{id}', [AnalysteController::class, 'delete_analyste']);
Route::get('/getProductsByFlux/{flux}', [MarchandiseController::class, 'getProductsByFlux'])->name('getProductsByFlux');


Route::get('/register', [AnalysteController::class, 'ajouter_analyste']);
Route::get('/TableAnalyste', [AnalysteController::class, 'liste_analyste']);


Route::get('/TableMarchandise', [MarchandiseController::class, 'liste_marchandise']);

Route::get('/liste', [MarchandiseController::class, 'liste'])->name('liste');


Route::get('/marchandise', [MarchandiseController::class, 'liste_marchandise']);
Route::get('/ajouterMarchandise', [MarchandiseController::class, 'ajouter_marchandise']);
Route::post('/ajouterMarchandise/traitement', [MarchandiseController::class, 'ajouter_marchandise_traitement']);
Route::get('/update_marchandise/{id}', [MarchandiseController::class, 'update_marchandise']);
Route::post('/updateMarchandise/traitement', [MarchandiseController::class, 'update_marchandise_traitement']);
Route::get('/delete_marchandise/{id}', [MarchandiseController::class, 'delete_marchandise']);

//Route::get('', '')->name('admin');
//Route::get('/admin', [DashboardAdminController::class, 'index']);
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');




