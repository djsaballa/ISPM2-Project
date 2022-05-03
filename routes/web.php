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
Route::get('/', function () {
    return view('./user/home');
});
Route::get('/bookings', function () {
    return view('./admin/list-of-bookings');
});
Route::get('/employees', function () {
    return view('./admin/list-of-employees');
});
Route::get('/schedules', function () {
    return view('./admin/list-of-upcoming-events');
});

// USER
Route::get('/user-bookings', [UserController::class, 'userBookings'])->name('user_bookings');
Route::get('/user-map', function () {
    return view('./user/map');
});
