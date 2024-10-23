

<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EquipementController;
use App\Http\Controllers\PlanningController;




use App\Http\Controllers\CampagneSensibilisationController; // Correctement importé avec 'App'


use App\Http\Controllers\DechetController;

use App\Http\Controllers\CentreRecyclageController;





Route::get('/', function () {
    return view('landing');
});




Route::resource('equipement', EquipementController::class);


Route::resource('planning', PlanningController::class);


// Route pour afficher le formulaire d'affectation
Route::get('equipement/{equipement}/affecter', [EquipementController::class, 'affecterPlanning'])->name('equipement.affecter');

// Route pour stocker l'affectation
Route::post('equipement/{equipement}/affectation', [EquipementController::class, 'storeAffectation'])->name('equipement.storeAffectation');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calendar', [PlanningController::class, 'showCalendar'])->name('calendar');



Route::resource('dechets', DechetController::class);


Route::resource('/collecte-evenements',App\Http\Controllers\CollecteEvenementController::class);



Route::resource('centre-recyclage', CentreRecyclageController::class);



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route pour le contrôleur CampagneSensibilisation
Route::resource('/campagnes', CampagneSensibilisationController::class);


