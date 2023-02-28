<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;
use Illuminate\Support\Facades\Route;

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


// ingatlan
Route::get('/indexIng', [IngatlanokController::class, 'index']);
Route::get('/showIng', [IngatlanokController::class, 'show']);
Route::get('/allIng', [IngatlanokController::class, 'all']); // 1
Route::post('/newIng', [IngatlanokController::class, 'new']); // 2
Route::delete('/delIng', [IngatlanokController::class, 'del']); // 3

// kategoria
Route::get('/indexKat', [KategoriakController::class, 'index']);
Route::get('/showKat', [KategoriakController::class, 'show']);
Route::delete('/delKat', [KategoriakController::class, 'del']);

require __DIR__.'/auth.php';
