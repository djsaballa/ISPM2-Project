<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userBookings(Request $request) 
    {
        return view('user.list-of-bookings');
    }

    public function userAddBookings(Request $request) 
    {
        return view('');
    }
}
