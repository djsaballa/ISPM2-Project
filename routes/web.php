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
// EDIT BOOKINGS
Route::get('/admin-edit-bookings/{booking_id}', [AdminController::class, 'editBookings'])->name('admin_edit_bookings');
Route::post('/admin-update-bookings', [AdminController::class, 'updateBookings'])->name('admin_update_bookings');
// DELETE BOOKING
Route::post('/admin-delete-bookings/{booking_id}', [AdminController::class, 'deleteBookings'])->name('admin_delete_bookings');
// LIST OF EMPLOYEES
Route::get('/admin-employees', [AdminController::class, 'employees'])->name('admin_employees');
// CHANGE PASSWORD
Route::get('/admin-change-passwords/{user_id}', [AdminController::class, 'changePassword'])->name('admin_change_passwords');
Route::post('/admin-update-passwords', [AdminController::class, 'updatePassword'])->name('admin_update_passwords');
// LIST OF UPCOMING EVENTS
Route::get('/admin-upcoming-events', [AdminController::class, 'upcomingEvents'])->name('admin_upcoming_events');
// ADD UPCOMING EVENTS
Route::get('/admin-add-schedules', [AdminController::class, 'addSchedules'])->name('admin_add_schedules');
Route::post('/admin-save-schedules', [AdminController::class, 'saveSchedules'])->name('admin_save_schedules');
// EDIT UPCOMING EVENTS
Route::get('/admin-edit-schedules/{event_id}', [AdminController::class, 'editSchedules'])->name('admin_edit_schedules');
Route::post('/admin-update-schedules', [AdminController::class, 'updateSchedules'])->name('admin_update_schedules');
// DELETE UPCOMING EVENT
Route::post('/admin-delete-schedules/{event_id}', [AdminController::class, 'deleteSchedules'])->name('admin_delete_schedules');
// SUPPORT
Route::get('/admin-support', [AdminController::class, 'support'])->name('admin_support');


// USER
// HOME
Route::get('/user-home/{user_id}', [UserController::class, 'home'])->name('user_home');
// LIST OF BOOKINGS
Route::get('/user-bookings/{user_id}', [UserController::class, 'bookings'])->name('user_bookings');
// CANCEL BOOKING
Route::post('/user-cancel-booking/{user_id}/{booking_id}', [UserController::class, 'cancelBooking'])->name('user_cancel_booking');
// MAP
Route::get('/user-map/{user_id}', [UserController::class, 'map'])->name('user_map');
// MAKE BOOKING
Route::POST('/user-make-booking', [UserController::class, 'makeBooking'])->name('user_make_booking');
// SUPPORT
Route::get('/user-support/{user_id}', [UserController::class, 'support'])->name('user_support');

// DELETE THIS
Route::get('/admin-list-tables', function () {
  return view('admin.list-of-tables');
});
