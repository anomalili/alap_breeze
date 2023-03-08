<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inkagtalnokController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/all',[inkagtalnokController::class, 'all']);
Route::get('/ujHirdetes', function() {
    return view('ujHirdetes');
});
Route::get('/welcome', function() {
    return view('welcome');
});
Route::get('/store', function() {
    return view('welcome');
});
Route::post('/store', [inkagtalnokController::class, 'store']);


require __DIR__.'/auth.php';
