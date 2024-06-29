<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarchandiseController;

// Route pour afficher la vue 'accueil'
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

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

Route::get('/getProductsByFlux', [MarchandiseController::class, 'getProductsByFlux'])->name('getProductsByFlux');


// Routes contrôlées par MarchandiseController
Route::get('/', [MarchandiseController::class, 'index'])->name('home');
Route::post('/search', [MarchandiseController::class, 'search'])->name('search');
