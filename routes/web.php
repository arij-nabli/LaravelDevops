

<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EquipementController;


use App\Http\Controllers\CampagneSensibilisationController; // Correctement importé avec 'App'


use App\Http\Controllers\DechetController;

use App\Http\Controllers\CentreRecyclageController;


use App\Http\Controllers\EquipementController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('dechets', DechetController::class);


Route::resource('/collecte-evenements',App\Http\Controllers\CollecteEvenementController::class);



Route::resource('centre-recyclage', CentreRecyclageController::class);



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route pour le contrôleur CampagneSensibilisation
Route::resource('/campagnes', CampagneSensibilisationController::class);


