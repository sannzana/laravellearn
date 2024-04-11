<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Then update the route to use the 'home' method
Route::get('/', [PageController::class, 'home']);



//Route::get('/l', function () {
//    return view('header');
//});

