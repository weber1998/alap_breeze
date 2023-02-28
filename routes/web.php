<?php

use App\Http\Controllers\IngatlanokController;
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


Route::get('/all', [IngatlanokController::class, 'all']); // 1
Route::post('/new', [IngatlanokController::class, 'new']); // 2
Route::delete('/del', [IngatlanokController::class, 'del']); // 3


require __DIR__.'/auth.php';
