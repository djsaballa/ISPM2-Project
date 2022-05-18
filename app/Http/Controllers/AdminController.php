<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Desk;
use App\Models\UpcomingEvent;

class AdminController extends Controller
{
    // LOGIN
    public function login(Request $request)
    {
        return view('login');
    }

    // LOGIN AUTH
    public function loginAuth(Request $request)
    {
        $request->validate ([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($request->email != "admin@email.com") {
            $login_info = User::where('email', '=', $request->email)->first();

            if(!$login_info) {
                return back()->with('failEmail','Email not recognized');

            }else{
                if($request->password != $login_info->password) {
                    return back()->with('failPass','Incorrect password');
                }else{
                    $user_id = $login_info->id;

                    return redirect(route('user_home', $user_id));
                }
            }
        }else{
            if($request->password = "admin123") {
                return redirect(route('admin_home'));
            }else{
                return back()->with('failPass','Incorrect password');
            }
        }
    }

    public function home(Request $request)
    {
        return view('admin.home');
    }

    // LIST OF BOOKINGS
    public function bookings(Request $request)
    {
        $bookings = Booking::all();

        return view(('admin.list-of-bookings'), compact('bookings'));
    }

    public function addBookings(Request $request)
    {
        return view('admin.add-bookings');
    }

    public function editBookings($booking_id)
    {
        return view('admin.edit-bookings');
    }

    // LIST OF EMPLOYEES
    public function employees(Request $request)
    {
        $employees = User::all();

        return view(('admin.list-of-employees'), compact('employees'));
    }

    public function changePassword($user_id)
    {
        return view('admin.change-password-employees');
    }

    // LIST OF UPCOMING EVENTS
    public function upcomingEvents(Request $request)
    {
        $upcoming_events = UpcomingEvent::all();

        return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
    }

    public function addSchedules(Request $request)
    {
        return view('admin.add-schedules');
    }

    public function editSchedules($event_id)
    {
        return view('admin.edit-schedules');
    }
}
