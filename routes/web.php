<?php

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

Route::get('/series',[\App\Http\Controllers\SeriController::class,"index"])->name("seri.index");
Route::get('/series/criar',[\App\Http\Controllers\SeriController::class,"create"])->name("seri.create");
Route::post('/series/criar',[\App\Http\Controllers\SeriController::class,"store"])->name("seri.store");
