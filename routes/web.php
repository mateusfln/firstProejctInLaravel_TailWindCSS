<?php

use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(SeriesController::class)->group(function(){

    Route::get('/series', 'index')->name('series.index');
    Route::get('/series/create', 'create')->name('series.create');
    Route::post('/series/store', 'store')->name('series.store');
    Route::delete('/series/destroy/{serie}', 'destroy')->name('series.destroy');
    
    

});

