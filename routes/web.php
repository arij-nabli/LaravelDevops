<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::resource('/collecte-evenements',App\Http\Controllers\CollecteEvenementController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');