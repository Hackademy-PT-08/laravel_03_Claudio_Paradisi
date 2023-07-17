<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'] )->name('homepage');

Route::get('/ricette/{id}', [PublicController::class, 'show'])->name('ricette');

Route::get('/filter/{region}',[PublicController::class, 'filteredByRegion'])->name('region');

Route::get('/filtered/{type}', [PublicController::class, 'filteredByType'])->name('tipo');

