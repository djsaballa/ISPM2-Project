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


    // EMILI CONTROLLER
    public function addBookings(Request $request)
    {
        return view('admin.add-bookings');
    }

    public function addSchedules(Request $request)
    {
        return view('admin.add-schedules');
    }

    public function editBookings(Request $request)
    {
        return view('admin.edit-bookings');
    }

    public function editSchedules(Request $request)
    {
        return view('admin.edit-schedules');
    }
}
