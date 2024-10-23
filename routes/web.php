

<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EquipementController;


use App\Http\Controllers\CampagneSensibilisationController; 

use App\Http\Controllers\AvisController; 


use App\Http\Controllers\DechetController;

use App\Http\Controllers\CentreRecyclageController;

use App\Http\Controllers\ZoneCollecteController;




Route::get('/', function () {
    return view('landing');
});




Route::resource('equipement', EquipementController::class);






Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::resource('zone-collectes', \App\Http\Controllers\ZoneCollecteController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('dechets', DechetController::class);


Route::resource('/collecte-evenements',App\Http\Controllers\CollecteEvenementController::class);



Route::resource('centre-recyclage', CentreRecyclageController::class);



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Routes pour gérer les campagnes
Route::resource('campagnes', CampagneSensibilisationController::class);

// Routes pour les avis liés à une campagne
// Routes pour les avis liés à une campagne
Route::prefix('campagnes/{campagne_id}')->group(function() {
    Route::get('avis', [AvisController::class, 'index'])->name('campagnes.avis.index'); // Lister les avis
    Route::get('avis/create', [AvisController::class, 'create'])->name('campagnes.avis.create'); // Créer un avis
    Route::post('avis', [AvisController::class, 'store'])->name('campagnes.avis.store'); // Sauvegarder un avis
    Route::get('avis/{id}', [AvisController::class, 'show'])->name('campagnes.avis.show'); // Afficher un avis
    Route::get('avis/{id}/edit', [AvisController::class, 'edit'])->name('campagnes.avis.edit'); // Modifier un avis
    Route::put('avis/{id}', [AvisController::class, 'update'])->name('campagnes.avis.update'); // Mettre à jour un avis
    Route::delete('avis/{id}', [AvisController::class, 'destroy'])->name('campagnes.avis.destroy'); // Supprimer un avis
});

