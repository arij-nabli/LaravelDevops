<?php

use Illuminate\Support\Facades\Route;
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



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');