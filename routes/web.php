<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', function () {return view('home');})->name('home');

// Route::get('/comics', [ComicController::class,'index'])->name('comics.index');
// Route::get('/comics/create', [ComicController::class,'create'])->name('comics.create');
// Route::get('/comics/store', [ComicController::class,'store'])->name('comics.store');
// Route::get('/comics/{comic}', [ComicController::class,'show'])->name('comics.show');

// questo camando genera in automatico le rotte per le operazioni CRUD sui comics e sostituisce tutte le righe commentate sopra
Route::resource('comics', ComicController::class);