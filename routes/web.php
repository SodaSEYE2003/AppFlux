<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarchandiseController;
use App\Http\Controllers\AnalysteController;
// Route pour afficher la vue 'accueil'
Route::get('/', function () {
    return view('accueil');
})->name('home');

Route::get('/results', function () {
    return view('results');
})->name('results');

// Route pour afficher la vue 'signUp'
Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/analyste', [AnalysteController::class, 'liste_analyste']);
Route::get('/ajouter', [AnalysteController::class, 'ajouter_analyste']);
Route::post('/ajouter/traitement', [AnalysteController::class, 'ajouter_analyste_traitement']);
Route::get('/update_analyste/{id}', [AnalysteController::class, 'update_analyste']);
Route::post('/update/traitement', [AnalysteController::class, 'update_analyste_traitement']);
Route::get('/delete_analyste/{id}', [AnalysteController::class, 'delete_analyste']);
Route::get('/getProductsByFlux/{flux}', [MarchandiseController::class, 'getProductsByFlux'])->name('getProductsByFlux');


// Routes contrôlées par MarchandiseController
Route::get('/', [MarchandiseController::class, 'index'])->name('home');
Route::post('/search', [MarchandiseController::class, 'search'])->name('search');
