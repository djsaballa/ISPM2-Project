<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)
    {
        return view('user.home');
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
