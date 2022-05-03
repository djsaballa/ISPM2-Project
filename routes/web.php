<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
// LOGIN
Route::get('/', function () {
    return view('login');
});

// ADMIN
Route::get('/admin-home', [AdminController::class, 'home'])->name('admin_home');
Route::get('/admin-bookings', [AdminController::class, 'bookings'])->name('admin_bookings');
Route::get('/admin-employees', [AdminController::class, 'employees'])->name('admin_employees');
Route::get('/admin-upcoming-events', [AdminController::class, 'upcomingEvents'])->name('admin_upcoming_events');

// USER
Route::get('/user-home', [UserController::class, 'home'])->name('user_home');
Route::get('/user-bookings', [UserController::class, 'bookings'])->name('user_bookings');
Route::get('/user-map', [UserController::class, 'map'])->name('user_map');
