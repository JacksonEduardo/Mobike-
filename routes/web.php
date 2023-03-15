<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SpareController;
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
Route::get('/profile', [PublicController::class, ('profile')])->name('profile')->middleware('auth');

//rotte per le biciclette
Route::get('/bike/index', [BikeController::class, ('index')])->name('bike.index');
Route::get('/bike/create', [BikeController::class, ('create')])->name('bike.create');
Route::post('/bike/store', [BikeController::class, ('store')])->name('bike.store');
Route::get('/bike/show/{bike}', [BikeController::class, ('show')])->name('bike.show');
Route::get('/bike/edit/{bike}', [BikeController::class, ('edit')])->name('bike.edit');
Route::put('/bike/update/{bike}', [BikeController::class, ('update')])->name('bike.update');
Route::delete('/bike/destroy/{bike}', [BikeController::class, ('destroy')])->name('bike.destroy'); 

//rotte per ricambi
Route::get('/spare/index', [SpareController::class, ('index')])->name('spare.index');
Route::get('/spare/create', [SpareController::class, ('create')])->name('spare.create');
Route::post('/spare/store', [SpareController::class, ('store')])->name('spare.store');
Route::get('/spare/show/{spare}', [SpareController::class, ('show')])->name('spare.show');
Route::get('/spare/edit/{spare}', [SpareController::class, ('edit')])->name('spare.edit');
Route::put('/spare/update{spare}', [SpareController::class, ('update')])->name('spare.update');
Route::delete('/spare/destroy{spare}', [SpareController::class,('destroy')])->name('spare.destroy');

//rotte per accessori
Route::get('/extra/index', [ExtraController::class, ('index')])->name('extra.index');
Route::get('/extra/create', [ExtraController::class, ('create')])->name('extra.create');
Route::post('/extra/store', [ExtraController::class, ('store')])->name('extra.store');
Route::get('/extra/show{extra}', [ExtraController::class, ('show')])->name('extra.show');
Route::get('/extra/edit{extra}', [ExtraController::class, ('edit')])->name('extra.edit');
Route::put('/extra/update{extra}', [ExtraController::class, ('update')])->name('extra.update');
Route::delete('/extra/destroy{extra}',[ExtraController::class, ('destroy')])->name('extra.destroy');