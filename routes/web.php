<?php

use App\Http\Controllers\MunicipalidadeController;
use App\Http\Controllers\PilotoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('municipalidades', MunicipalidadeController::class);
Route::resource('pilotos', PilotoController::class);
