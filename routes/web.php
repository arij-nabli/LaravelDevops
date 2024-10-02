

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DechetController;

use App\Http\Controllers\CentreRecyclageController;


Route::get('/', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});


//Route::resource('dechets', DechetController::class);
Route::resource('dechets', DechetController::class);


Route::resource('/collecte-evenements',App\Http\Controllers\CollecteEvenementController::class);



Route::resource('centre-recyclage', CentreRecyclageController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');