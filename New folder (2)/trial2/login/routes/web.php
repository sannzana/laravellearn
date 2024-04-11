<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', function () {
    return view('layout.login');
})->name('login');

// Route::get('/register', function () {
//     return view('layout.register');
// })->name('register');



// Display the registration form
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle the form submission
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');


// Password Reset Request Form
Route::get('/password/request', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

// Password Reset Form Submission
Route::post('/password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');


Auth::routes(['register' => true]); // Enables both login and registration



