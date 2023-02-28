<?php

use App\Http\Controllers\IngatlanController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/mindegyik',[IngatlanController::class, 'mutasdMindet']);
Route::get('/uj',[IngatlanController::class, 'ujIngatlan']);
Route::get('/torles',[IngatlanController::class, 'ingatlanTorlese']);

require __DIR__.'/auth.php';
