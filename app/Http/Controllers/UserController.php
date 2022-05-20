<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
use App\Models\Booking;
use App\Models\Desk;
use App\Models\UpcomingEvent;
use Carbon\Carbon;
use DateTime;
use Session;

class UserController extends Controller
{
    /**
     *   HOME
    **/ 
    public function home($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();
        $user_bookings = Booking::where('user_id', '=', $user_id)->orderBy('date', 'ASC')->get();
        $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->get();

        return view(('user.home'), compact('user_info', 'user_bookings', 'upcoming_events'));
    }

    /**
     *  LIST OF BOOKINGS
    **/ 
    public function bookings($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();

        $now = Carbon::now('Asia/Manila')->format('Y-m-d');
        $bookings = Booking::where('user_id', '=', $user_id)->whereDate('date', '>=', $now)->orderBy('date', 'ASC')->get();

        return view(('user.list-of-bookings'), compact('user_info', 'bookings'));
    }

    // Cancel Booking
    public function cancelBooking($user_id, $booking_id)
    {
        if(!is_null($booking_id)) {
            $delete = Booking::find($booking_id)->delete();   
            if ($delete) {
                $user_info = User::where('id', '=', $user_id)->first();

                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $bookings = Booking::where('user_id', '=', $user_id)->whereDate('date', '>=', $now)->orderBy('date', 'ASC')->get();
                Session::flash('succesful-deletion', 'Booking has been successfully cancelled.');
    
                return view(('user.list-of-bookings'), compact('bookings', 'user_info'));
            } else {
                $user_info = User::where('id', '=', $user_id)->first();

                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $bookings = Booking::where('user_id', '=', $user_id)->whereDate('date', '>=', $now)->orderBy('date', 'ASC')->get();              
                Session::flash('unsuccesful-deletion', 'An error has occurred, booking has not been cancelled.');
        
                return view(('user.list-of-bookings'), compact('bookings', 'user_info'));
            }
        }
        else {
            $user_info = User::where('id', '=', $user_id)->first();

            $now = Carbon::now('Asia/Manila')->format('Y-m-d');
            $bookings = Booking::where('user_id', '=', $user_id)->whereDate('date', '>=', $now)->orderBy('date', 'ASC')->get();
            Session::flash('unsuccesful-deletion', 'An error has occurred, booking has not been cancelled.');

            return view(('user.list-of-bookings'), compact('bookings', 'user_info'));
        }
    }

    /**
     *  MAP
    **/ 
    public function map($user_id)
    {
        $user_info = User::where('id', '=', $user_id)->first();
        $desks = Desk::all();

        return view(('user.map'), compact('user_info', 'desks'));
    }

    // Make Booking
    public function makeBooking(Request $request) 
    {
        $request->validate([
            'date' => 'required',
            'desk' => 'required'
        ],
        [
            'date.required' => 'Date is required',
            'desk.required' => 'Desk is required'
        ]);

        $user_id = $request->userId;
        $desk_id = $request->desk;
        $date = date_create($request->date);

        $today = new DateTime('now');
        $date_diff = date_diff($today, $date);

        $date_verificaiton = $date_diff->format('%R%a');
        $check_availibility = Booking::where('date', '=', $date)->where('desk_id', '=', $desk_id)->get();

        if($date_verificaiton > 0) {

            if(count($check_availibility) == 0) {
                $booking = [
                    'user_id' => $user_id,
                    'desk_id' => $desk_id,
                    'date' => $date
                ];
    
                $booking_add = Booking::create($booking);
    
                if($booking_add) {
                    $user_info = User::where('id', '=', $user_id)->first();

                    $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $bookings = Booking::where('user_id', '=', $user_id)->whereDate('date', '>=', $now)->orderBy('date', 'ASC')->get();
    
                    Session::flash('succesful-add', 'Booking has been successfully made.');
        
                    return view(('user.list-of-bookings'), compact('bookings', 'user_info'));
                } else {
                    $user_info = User::where('id', '=', $user_id)->first();

                    $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $bookings = Booking::where('user_id', '=', $user_id)->whereDate('date', '>=', $now)->orderBy('date', 'ASC')->get();    
                    Session::flash('unsuccesful-add', 'An error has occurred, booking was not made.');
        
                    return view(('user.list-of-bookings'), compact('bookings', 'user_info'));
                }
            } else {
                return back()->with('notAvailable','The seat is not available on that date.');
            }
        } else {
            return back()->with('notAvailable','Invalid date.');
        }
    }
}

