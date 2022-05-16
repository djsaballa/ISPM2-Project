<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Desk;

class UserController extends Controller
{
    public function home($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();
        $user_bookings = Booking::where('user_id', $user_id)->get();

        return view(('user.home'), compact('user_info', 'user_bookings'));
    }

    public function bookings(Request $request)
    {
        return view('user.list-of-bookings');
    }

    public function map(Request $request)
    {
        return view('user.map');
    }
}
