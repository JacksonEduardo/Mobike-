<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, ('homepage')])->name('homepage');

//rotte per le biciclette
Route::get('/bike/index', [BikeController::class, ('bike')])->name('bike.index');
Route::get('/bike/create', [BikeController::class, ('create')])->name('bike.create');
Route::post('/bike/store', [BikeController::class, ('store')])->name('bike.store');
Route::get('/bike/show/{bike}', [BikeController::class, ('show')])->name('bike.show');
Route::get('/bike/edit/{bike}', [BikeController::class, ('edit')])->name('bike.edit');
Route::put('/bike/update/{bike}', [BikeController::class, ('update')])->name('bike.update');
Route::delete('/bike/destroy/{bike}', [BikeController::class, ('destroy')])->name('bike.destroy'); 