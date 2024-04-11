<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DashBoard;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login',[AuthManager::class,'login'] )->name('login');
Route::post('/login',[AuthManager::class,'loginpost'] )->name('login.post');

Route::get('/registration',[AuthManager::class,'registration'] )->name('registration');
Route::post('/registration',[AuthManager::class,'registrationpost'] )->name('registration.post');
Route::get('/logout',[AuthManager::class,'logout'] )->name('logout');

Route::get('/dashboard', [DashBoard::class, 'view'])->middleware('auth')->name('dashboard');
Route::delete('users/{user}', [AuthManager::class, 'destroy'])->name('users.destroy');//$user = User::findOrFail($id); eikhn e j name, se name
Route::get('users/{user}/edit', [AuthManager::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [AuthManager::class, 'update'])->name('users.update');

