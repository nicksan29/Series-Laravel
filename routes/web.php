<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;
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

Route::get('/series',[SerieController::class,"index"])->name("seri.index");
Route::get('/series/criar',[SerieController::class,"create"])->name("seri.create");
Route::post('/series/criar',[SerieController::class,"store"])->name("seri.store");
Route::get('/series/editar/{id}',[SerieController::class,"edit"])->name("seri.edit");
Route::put('/series/update',[SerieController::class,"update"])->name("seri.update");
Route::delete('/series/delete/{id}',[SerieController::class,"delete"])->name("seri.delete");
Route::get('/series/bio/{id}',[SerieController::class,"bio"])->name("seri.bio");
