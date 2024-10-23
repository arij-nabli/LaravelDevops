<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\CampagneSensibilisationController; 

use App\Http\Controllers\PlanningController;





use App\Http\Controllers\AvisController; 


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
    Route::resource('planning', PlanningController::class);
    Route::get('equipement/{equipement}/affecter', [EquipementController::class, 'affecterPlanning'])->name('equipement.affecter');
    Route::post('equipement/{equipement}/affectation', [EquipementController::class, 'storeAffectation'])->name('equipement.storeAffectation');
    Route::get('/calendar', [PlanningController::class, 'showCalendar'])->name('calendar');

    Route::resource('/collecte-evenements', App\Http\Controllers\CollecteEvenementController::class);
    Route::resource('centre-recyclage', CentreRecyclageController::class);
    Route::resource('/campagnes', CampagneSensibilisationController::class);
    Route::prefix('campagnes/{campagne_id}')->group(function() {
        Route::get('avis', [AvisController::class, 'index'])->name('campagnes.avis.index'); // Lister les avis
        Route::get('avis/create', [AvisController::class, 'create'])->name('campagnes.avis.create'); // Créer un avis
        Route::post('avis', [AvisController::class, 'store'])->name('campagnes.avis.store'); // Sauvegarder un avis
        Route::get('avis/{id}', [AvisController::class, 'show'])->name('campagnes.avis.show'); // Afficher un avis
        Route::get('avis/{id}/edit', [AvisController::class, 'edit'])->name('campagnes.avis.edit'); // Modifier un avis
        Route::put('avis/{id}', [AvisController::class, 'update'])->name('campagnes.avis.update'); // Mettre à jour un avis
        Route::delete('avis/{id}', [AvisController::class, 'destroy'])->name('campagnes.avis.destroy'); // Supprimer un avis
    });
    // Ajoutez d'autres routes sécurisées ici
});













