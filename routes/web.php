<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('equipos', App\Http\Controllers\EquipoController::class);
Route::resource('jugadors', App\Http\Controllers\JugadorController::class);