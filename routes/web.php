<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DireccionResidenciumController;
use App\Http\Controllers\HistorialEducativoController;
use App\Http\Controllers\MunicipalidadeController;
use App\Http\Controllers\ParqueoController;
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
Route::resource('historial-educativos', HistorialEducativoController::class);
Route::resource('direccion-residencia', DireccionResidenciumController::class);
Route::resource('contactos', ContactoController::class);
Route::resource('parqueos', ParqueoController::class);