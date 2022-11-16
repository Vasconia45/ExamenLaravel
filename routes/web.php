<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotoController;
use App\Http\Controllers\EscuderiaController;

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

//Route::view('/', 'layouts.main');
Route::view('/pilot', 'layouts.createpiloto')->name('pilotoshow');
Route::view('/team', 'layouts.createteam')->name('escuderiashow');

Route::controller(PilotoController::class)->group(function(){
    Route::post('/pilot/create', 'create')->name('piloto.create');
    Route::get('/pilot/asign', 'showasign')->name('asignpilottoteamshow');
    Route::put('/pilot/asign', 'asign')->name('asignpilottoteam');
});

Route::controller(EscuderiaController::class)->group(function(){
    Route::get('/', 'main');
    Route::delete('/team/{id}', 'delete')->name('escuderia.delete');
    Route::post('/team', 'create')->name('escuderia.create');
});
