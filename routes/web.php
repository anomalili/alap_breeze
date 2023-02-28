<?php

use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\KategoriaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/uj_hirdetes', function () {
    return view('ujhirdetes');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/mindegyik',[IngatlanController::class, 'index']);

Route::post('/uj',[IngatlanController::class, 'formView']);
Route::post('/uj',[IngatlanController::class, 'form'])->name('validate.form');

Route::post('/uj_ingatlan',[IngatlanController::class, 'store']);
Route::get('/torles',[IngatlanController::class, 'destroy']);
Route::get('/ingatlanKat',[IngatlanController::class, 'ingatlanKat']);

Route::get('/kat_mutat',[KategoriaController::class, 'index']);
Route::post('/kat_uj',[KategoriaController::class, 'store']);
Route::get('/kat_uj',[KategoriaController::class, 'storeView']);
Route::get('/kat_torles',[KategoriaController::class, 'destroy']);

require __DIR__.'/auth.php';
