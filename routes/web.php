<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampagneSensibilisationController; // Correctement importé avec 'App'

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route pour le contrôleur CampagneSensibilisation
Route::resource('/campagnes', CampagneSensibilisationController::class);
