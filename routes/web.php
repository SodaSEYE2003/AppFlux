<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});
// routes/web.php
Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

use App\Http\Controllers\MarchandiseController;

Route::get('/', [MarchandiseController::class, 'index'])->name('home');
Route::post('/search', [MarchandiseController::class, 'search'])->name('search');
