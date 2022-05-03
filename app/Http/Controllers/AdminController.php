<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(Request $request) 
    {
        return view('admin.home');
    }

    public function bookings(Request $request) 
    {
        return view('admin.list-of-bookings');
    }

    public function employees(Request $request) 
    {
        return view('admin.list-of-employees');
    }

    public function upcomingEvents(Request $request) 
    {
        return view('admin.list-of-upcoming-events');
    }
}
