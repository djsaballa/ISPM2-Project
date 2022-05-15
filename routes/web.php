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
// Home
Route::get('/admin-home', [AdminController::class, 'home'])->name('admin_home');
// List of Bookings
Route::get('/admin-bookings', [AdminController::class, 'bookings'])->name('admin_bookings');
// List of Employees
Route::get('/admin-employees', [AdminController::class, 'employees'])->name('admin_employees');
// List of Upcoming Events
Route::get('/admin-upcoming-events', [AdminController::class, 'upcomingEvents'])->name('admin_upcoming_events');

// USER
// Home
Route::get('/user-home', [UserController::class, 'home'])->name('user_home');
// List of Bookings
Route::get('/user-bookings', [UserController::class, 'bookings'])->name('user_bookings');
// Map
Route::get('/user-map', [UserController::class, 'map'])->name('user_map');


// EMILI ROUTES
// Add Bookings
Route::get('/admin-add-bookings', [AdminController::class, 'addBookings'])->name('admin_add_bookings');
// Add Upcoming Events
Route::get('/admin-add-schedules', [AdminController::class, 'addSchedules'])->name('admin_add_schedules');
// Edit Bookings
Route::get('/admin-edit-bookings', [AdminController::class, 'editBookings'])->name('admin_edit_bookings');
// Edit Upcoming Events
Route::get('/admin-edit-schedules', [AdminController::class, 'editSchedules'])->name('admin_edit_schedules');


// DELETE THESE ROUTES
Route::get('/addBookings', function () {
  return view('./components/addBookings');
});
