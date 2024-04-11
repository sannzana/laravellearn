<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\UserManagement\AdminUser\AdminUserController;
use App\Http\Controllers\Backend\UserManagement\Customer\CustomerController;
use App\Http\Controllers\Frontend\About\AboutController;
use App\Http\Controllers\Frontend\AppDownload\AppDownloadController;
use App\Http\Controllers\Frontend\Blog\BlogController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use App\Http\Controllers\Frontend\Events\EventController;
use App\Http\Controllers\Frontend\Home\HomePageController;
use App\Http\Controllers\Frontend\LoginPage\LoginPageController;
use App\Http\Controllers\Frontend\Movies\MoviesController;
use App\Http\Controllers\Frontend\PageNotFound\PageNotFoundController;
use App\Http\Controllers\Frontend\Sports\SportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* ---------- Home Page Controller ---------- */
Route::get('/', [HomePageController::class, 'index'])->name('home');

/* ---------- Movies Controller ---------- */
Route::get('/movies', [MoviesController::class, 'index'])->name('movies');
Route::get('/movie/details', [MoviesController::class, 'details'])->name('movie.details');
Route::get('/movie/ticket/plan', [MoviesController::class, 'ticketPlan'])->name('movie.ticket-plan');
Route::get('/movie/seat/plan', [MoviesController::class, 'seatPlan'])->name('movie.seat-plan');
Route::get('/movie/checkout', [MoviesController::class, 'checkout'])->name('movie.checkout');
Route::get('/movie/food', [MoviesController::class, 'food'])->name('movie.food');

/* ---------- Events Controller ---------- */
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/event/details', [EventController::class, 'details'])->name('events.details');
Route::get('/event/speaker/profile', [EventController::class, 'speaker'])->name('events.speaker');
Route::get('/event/ticket', [EventController::class, 'ticket'])->name('events.ticket');
Route::get('/event/checkout', [EventController::class, 'checkout'])->name('events.checkout');

/* ---------- Events Controller ---------- */
Route::get('/sports', [SportController::class, 'index'])->name('sports');
Route::get('/sport/details', [SportController::class, 'details'])->name('sports.details');
Route::get('/sport/ticket', [SportController::class, 'ticket'])->name('sports.ticket');
Route::get('/sport/checkout', [SportController::class, 'checkout'])->name('sports.checkout');

/* ---------- About Controller ---------- */
Route::get('/about', [AboutController::class, 'index'])->name('about');

/* ---------- App Download Controller ---------- */
Route::get('/app-download', [AppDownloadController::class, 'index'])->name('app-download');

/* ---------- Login Controller ---------- */
Route::get('/login-page', [LoginPageController::class, 'loginPage'])->name('login-page');
Route::get('/register-page', [LoginPageController::class, 'registerPage'])->name('register-page');

/* ---------- Page not found Controller ---------- */
Route::get('/page-not-found', [PageNotFoundController::class, 'index'])->name('page-not-found');

/* ---------- Blog Controller ---------- */
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/details', [BlogController::class, 'details'])->name('blog.details');

/* ---------- Contact Controller ---------- */
Route::get('/contact', [ContactController::class, 'index'])->name('contact');




Auth::routes();

/* ---------- HomeController Controller ---------- */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* ---------- Admin User Controller ---------- */
Route::get('all/admin-user', [AdminUserController::class, 'index'])->name('admin-users.index');
Route::get('admin-user/create', [AdminUserController::class, 'create'])->name('admin-users.create');
Route::post('admin-user/store', [AdminUserController::class, 'store'])->name('admin-users.store');
Route::get('admin-user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin-users.edit');
Route::post('admin-user/update/{id}', [AdminUserController::class, 'update'])->name('admin-users.update');
Route::get('admin-user/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin-users.destroy');
Route::get('admin-user/disable/{id}', [AdminUserController::class, 'inActive'])->name('admin-users.inactive');
Route::get('admin-user/enable/{id}', [AdminUserController::class, 'active'])->name('admin-users.active');
Route::get('admin-user/credit/{id}', [AdminUserController::class, 'getCreditForm'])->name('admin-users.credit');
Route::post('admin-user/credit/udpate/{id}', [AdminUserController::class, 'postCreditForm'])->name('admin-users.credit.update');

/* ---------- Admin User Controller ---------- */
Route::get('all/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
Route::get('customer/disable/{id}', [CustomerController::class, 'inActive'])->name('customer.inactive');
Route::get('customer/enable/{id}', [CustomerController::class, 'active'])->name('customer.active');
Route::get('customer/credit/{id}', [CustomerController::class, 'getCreditForm'])->name('customer.credit');
Route::post('customer/credit/udpate/{id}', [CustomerController::class, 'postCreditForm'])->name('customer.credit.update');
