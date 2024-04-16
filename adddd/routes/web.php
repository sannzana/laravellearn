<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('trialimage');
});



Route::get('/movies', [MoviesController::class, 'index']);
Route::post('/movies', [MoviesController::class, 'store']);
Route::get('/form', function () {
    return view('movie');
});

