<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Desk;
use App\Models\UpcomingEvent;

class UserController extends Controller
{
    // HOME
    public function home($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();
        $user_bookings = Booking::where('user_id', '=', $user_id)->get();
        $upcoming_events = UpcomingEvent::all();

        return view(('user.home'), compact('user_info', 'user_bookings', 'upcoming_events'));
    }

    // LIST OF BOOKINGS
    public function bookings($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();

        return view(('user.list-of-bookings'), compact('user_info'));
    }

    // MAP
    public function map($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();

        return view(('user.map'), compact('user_info'));
    }
}
