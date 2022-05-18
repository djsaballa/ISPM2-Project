<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Booking;
use App\Models\Desk;

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
Route::get('/',  [AdminController::class, 'login'])->name('login');
Route::post('/login-auth', [AdminController::class, 'loginAuth'])->name('login_auth');

// ADMIN
  // HOME
  Route::get('/admin-home', [AdminController::class, 'home'])->name('admin_home');
  // LIST OF BOOKINGS
  Route::get('/admin-bookings', [AdminController::class, 'bookings'])->name('admin_bookings');
    // ADD BOOKINGS
    Route::get('/admin-add-bookings', [AdminController::class, 'addBookings'])->name('admin_add_bookings');
    // EDIT BOOKINGS
    Route::get('/admin-edit-bookings', [AdminController::class, 'editBookings'])->name('admin_edit_bookings');
  // LIST OF EMPLOYEES
  Route::get('/admin-employees', [AdminController::class, 'employees'])->name('admin_employees');
  // LIST OF UPCOMING EVENTS
  Route::get('/admin-upcoming-events', [AdminController::class, 'upcomingEvents'])->name('admin_upcoming_events');
    // ADD UPCOMING EVENTS
    Route::get('/admin-add-schedules', [AdminController::class, 'addSchedules'])->name('admin_add_schedules');
    // EDIT UPCOMING EVENTS
    Route::get('/admin-edit-schedules', [AdminController::class, 'editSchedules'])->name('admin_edit_schedules');

// USER
  // HOME
  Route::get('/user-home/{user_id}', [UserController::class, 'home'])->name('user_home');
  // LIST OF BOOKINGS
  Route::get('/user-bookings/{user_id}', [UserController::class, 'bookings'])->name('user_bookings');
  // MAP
  Route::get('/user-map/{user_id}', [UserController::class, 'map'])->name('user_map');


