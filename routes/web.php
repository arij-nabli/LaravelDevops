<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\CampagneSensibilisationController; 
use App\Http\Controllers\DechetController;
use App\Http\Controllers\CentreRecyclageController;
use App\Http\Controllers\ZoneCollecteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('landing');
});
Route::get('/landing', function () {
    return view('landing');
})->name('landing');


// Routes pour l'authentification
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Ressources pour les différentes entités


// Route pour la page d'accueil
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('equipement', EquipementController::class);
    Route::resource('zone-collectes', ZoneCollecteController::class);
    Route::resource('dechets', DechetController::class);
    Route::resource('/collecte-evenements', App\Http\Controllers\CollecteEvenementController::class);
    Route::resource('centre-recyclage', CentreRecyclageController::class);
    Route::resource('/campagnes', CampagneSensibilisationController::class);
    // Ajoutez d'autres routes sécurisées ici
});