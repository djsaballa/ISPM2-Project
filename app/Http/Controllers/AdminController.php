<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Desk;

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

    public function bookings(Request $request)
    {
        return view('admin.list-of-bookings');
    }

    public function addBookings(Request $request)
    {
        return view('admin.add-bookings');
    }

    public function editBookings(Request $request)
    {
        return view('admin.edit-bookings');
    }

    public function employees(Request $request)
    {
        return view('admin.list-of-employees');
    }

    public function upcomingEvents(Request $request)
    {
        return view('admin.list-of-upcoming-events');
    }

    public function addSchedules(Request $request)
    {
        return view('admin.add-schedules');
    }

    public function editSchedules(Request $request)
    {
        return view('admin.edit-schedules');
    }
}
