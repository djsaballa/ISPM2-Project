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

    /**
     *   HOME
    **/ 
    public function home(Request $request)
    {
        return view('admin.home');
    }

    /**
     *  LIST OF BOOKINGS
    **/ 
    public function bookings(Request $request)
    {
        $now = Carbon::now('Asia/Manila')->format('Y-m-d');
        $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();

        return view(('admin.list-of-bookings'), compact('bookings'));
    }

    // Edit Bookings
    public function editBookings($booking_id)
    {
        $booking_info = Booking::find($booking_id);
        $desks = Desk::where('status', '=', '1')->get();

        return view(('admin.edit-bookings'), compact('desks', 'booking_info'));
    }

    // Update Bookings
    public function updateBookings(Request $request) 
    {
        $request->validate([
            'userId' => 'required',
            'deskId' => 'required',
            'date' => 'date_format:Y-m-d',
        ],
        [
            'userId.required' => 'Employee is required',
            'deskId.required' => 'Desk is required',
            'peridateod.date_format' => 'Incorrect date format',
        ]);

        $user_id = $request->userId;
        $desk_id = $request->deskId;
        $date = $request->date;

        $check_availibility = Booking::where('date', '=', $date)->where('desk_id', '=', $desk_id)->get();
        $check_availability_user_id = Booking::where('date', '=', $date)->where('desk_id', '=', $desk_id)->where('user_id', '=', $user_id)->get();

        if((count($check_availibility) == 0) || ($check_availibility && (count($check_availability_user_id) == 0))) {
            $booking_update = [
                'user_id' => $user_id,
                'desk_id' => $desk_id,
                'date' => $date
            ];

            $booking_id = $request->bookingId;
            
            if(!is_null($booking_id)) {
                $booking = Booking::find($booking_id);

                $booking->update($booking_update);

                if($booking->update($booking_update)) {
                    Session::flash('succesful-edit', 'Edited booking successfully.');

                    $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();

                    return view(('admin.list-of-bookings'), compact('bookings'));
                } else {
                    Session::flash('unsuccesful-edit', 'Unsuccessful edit of booking.');

                    $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();

                    return view(('admin.list-of-bookings'), compact('bookings'));
                }
            } else {
                Session::flash('unsuccesful-edit', 'Unsuccessful edit of booking.');

                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();

                return view(('admin.list-of-bookings'), compact('bookings'));
            }
        } else {
            return back()->with('notAvailable','The seat is not available on that date.');
        }
    }

    // Delete Bookings
    public function deleteBookings($booking_id)
    {
        if(!is_null($booking_id)) {
            $delete = Booking::find($booking_id)->delete();   
            if ($delete) {
                Session::flash('succesful-deletion', 'Booking has been successfully deleted.');
    
                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();
    
                return view(('admin.list-of-bookings'), compact('bookings'));
            } else {
                Session::flash('unsuccesful-deletion', 'An error has occurred, booking has not been deleted.');
    
                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();
    
                return view(('admin.list-of-bookings'), compact('bookings'));
            }
        }
        else {
            Session::flash('unsuccesful-deletion', 'An error has occurred, booking has not been deleted.');

            $now = Carbon::now('Asia/Manila')->format('Y-m-d');
            $bookings = Booking::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();

            return view(('admin.list-of-bookings'), compact('bookings'));
        }
    }


    /**
     *  LIST OF EMPLOYEES
    **/
    public function employees(Request $request)
    {
        $employees = User::orderBy('last_name', 'ASC')->get();

        return view(('admin.list-of-employees'), compact('employees'));
    }

    // Change Password
    public function changePassword($user_id)
    {
        $user_info = User::find($user_id);
        return view(('admin.change-password-employees'), compact('user_info'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'newPassword' => 'required|min:8',
            'comfirmNewPassword' => ['same:newPassword'],
        ]);
    
        $user_id = $request->userId;

        if ($user_id) {
            $user_info = User::find($user_id);

            if (!is_null($user_info)) {
                $user_info->update(['password'=> $request->newPassword]);
                Session::flash('succesful-change', 'Changed password successfully.');
                $employees = User::all();

                return view(('admin.list-of-employees'), compact('employees'));
            } else { 
                Session::flash('unsuccesful-change', 'Password change is unsuccessful.');
                $employees = User::all();

                return view(('admin.list-of-employees'), compact('employees'));                
            }
        } else {
            Session::flash('unsuccesful-change', 'Password change is unsuccessful.');
            $employees = User::all();

            return view(('admin.list-of-employees'), compact('employees'));
        }
   }

    /**
     *  LIST OF UPCOMING EVENTS
    **/
    public function upcomingEvents(Request $request)
    {
        $now = Carbon::now('Asia/Manila')->format('Y-m-d');
        $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();

        return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
    }

    // Add Upcoming Events
    public function addSchedules(Request $request)
    {
        return view('admin.add-schedules');
    }

    // Save Upcoming Event
    public function saveSchedules(Request $request)
    {
        $request->validate(
            [
            'eventTitle' => 'required',
            'desc' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'startTime' => 'nullable|date_format:H:i:s',
            'endTime' => 'nullable|date_format:H:i:s'
        ],
            [
            'eventTitle.required' => 'Event Title is required',
            'desc.required' => 'Description is required',
            'date.required' => 'Date is required',
            'date.date_format' => 'Incorrect date format',
            'startTime.date_format' => 'Incorrect time format',
            'endTime.date_format' => 'Incorrect time format',
        ]
        );

        $event_title = $request->eventTitle;
        $description = $request->desc;
        $date = date_create($request->date);
        $start_time = $request->startTime;
        $end_time = $request->endTime;
        $upcoming_event = [
            'title' => $event_title,
            'description' => $description,
            'date' => $date,
            'start_time' => $start_time,
            'end_time' => $end_time
        ];

        $today = new DateTime('now');
        $date_diff = date_diff($today, $date);

        $date_verificaiton = $date_diff->format('%R%a');

        if ($date_verificaiton > 0) {
            if (!is_null($upcoming_event)) {
                $upcoming_event_add = UpcomingEvent::create($upcoming_event);

                if ($upcoming_event_add) {
                    Session::flash('succesful-add', 'Added Upcoming Event successfully.');

                    $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();
                    

                    return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
                } else {
                    Session::flash('unsuccesful-add', 'Adding of Upcoming Event is unsuccessful.');

                    $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                    $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();
                    

                    return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
                }
            } else {
                Session::flash('unsuccesful-add', 'Adding of Upcoming Event is unsuccessful.');

                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();
                

                return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
            }
        } else {
            return back()->with('unsuccessful-add','Invalid Date.');
        }
    }


    // Edit Upcoming Events
    public function editSchedules($event_id)
    {
        $event_info = UpcomingEvent::find($event_id);

        return view(('admin.edit-schedules'), compact('event_info'));
    }

    // Update Upcoming Events
    public function updateSchedules(Request $request)
    {
        $request->validate([
            'eventTitle' => 'required',
            'desc' => 'required',
            'date' => 'date_format:Y-m-d',
            'startTime' => 'nullable|date_format:H:i:s',
            'endTime' => 'nullable|date_format:H:i:s'
        ],
        [
            'eventTitle.required' => 'Event Title is required',
            'desc.required' => 'Description is required',
            'date.date_format' => 'Incorrect date format',
            'startTime.date_format' => 'Incorrect time format',
            'endTime.date_format' => 'Incorrect time format',
        ]);

        $event_title = $request->eventTitle;
        $description = $request->desc;
        $date = $request->date;
        $start_time = $request->startTime;
        $end_time = $request->endTime;
        $event_update= [
            'title' => $event_title,
            'description' => $description,
            'date' => $date,
            'start_time' => $start_time,
            'end_time' => $end_time,
        ];

        $event_id = $request->eventId;

        if ($event_id) {
            $event_info = UpcomingEvent::find($event_id);

            if (!is_null($event_info)) {
                $event_info->update($event_update);
                
                Session::flash('succesful-edit', 'Edited upcoming event successfully.');

                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();;

                return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
            } else { 
                Session::flash('unsuccesful-edit', 'Editing of Upcoming Event is unsuccessful.');

                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();;

            return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));                
            }
        } else {
            Session::flash('unsuccesful-edit', 'Editing of Upcoming Event is unsuccessful.');

            $now = Carbon::now('Asia/Manila')->format('Y-m-d');
            $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();;

            return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
        }
    }

    // Delete Upcoming Events
    public function deleteSchedules($event_id)
    {
        if(!is_null($event_id)) {
            $delete = UpcomingEvent::find($event_id)->delete();   
            if ($delete) {
                Session::flash('succesful-deletion', 'Upcoming Event has been successfully deleted.');
    
                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();;
    
                return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
            } else {
                Session::flash('unsuccesful-deletion', 'An error has occurred, Upcoming Event has not been deleted.');
    
                $now = Carbon::now('Asia/Manila')->format('Y-m-d');
                $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();;
    
                return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
            }
        } else {
            Session::flash('unsuccesful-deletion', 'An error has occurred, Upcoming Event has not been deleted.');

            $now = Carbon::now('Asia/Manila')->format('Y-m-d');
            $upcoming_events = UpcomingEvent::orderBy('date', 'ASC')->whereDate('date', '>=', $now)->get();;

            return view(('admin.list-of-upcoming-events'), compact('upcoming_events'));
        }
    }

    /**
     *  SUPPORT
    **/ 
    public function support(Request $request)
    {
        return view(('admin.support'));
    }

     /**
     *  LIST Of TABLES
    **/ 
    public function tables(Request $request)
    {   
        $desks = Desk::all();

        return view(('admin.list-of-tables'), compact('desks'));
    }

    // Add Tables
    public function addTables(Request $request) {
        return view(('admin.add-tables'));
    }

    // Save Tables
    public function  saveTables(Request $request) {
        $request->validate([
            'dnum' => 'required',
            'status' => 'required',
        ],
        [
            'dnum.required' => 'Desk to be added is required',
            'status.required' => 'Status is required',
        ]);

        $dnum = $request->dnum;
        $status = $request->status;

        for($i = 1; $i <=($dnum); $i++) {
            $last_seat_number = Desk::orderBy('seat_number', 'DESC')->first()->seat_number;

            for($j = 1; $j <= ($last_seat_number + 1); $j++) {
                $desk = [
                    'seat_number' => $j,
                    'status' => $status
                ];
            }
            $desk_add = Desk::create($desk);
        }

        if ($desk_add) {
            Session::flash('table', 'Tables added succesfully');
            $desks = Desk::all();

            return view(('admin.list-of-tables'), compact('desks'));
        }
        
    }

    public function  enableTables(Request $request) {
        $desk_id = $request->deskId;
        $desk = Desk::find($desk_id);
        $status = $desk->status;

        if(!$status) {
            $desk->update(['status'=> '1']);

            Session::flash('table', 'Desk is now enabled');
            $desks = Desk::all();

            return view(('admin.list-of-tables'), compact('desks'));
        } else {
            Session::flash('table', 'Desk is already enabled');
            $desks = Desk::all();

            return view(('admin.list-of-tables'), compact('desks'));
        }
    }

    public function  disableTables(Request $request) {
        $desk_id = $request->deskId;
        $desk = Desk::find($desk_id);
        $status = $desk->status;

        if($status) {
            $desk->update(['status'=> '0']);

            Session::flash('table', 'Desk is now disabled');
            $desks = Desk::all();

            return view(('admin.list-of-tables'), compact('desks'));
        } else {
            Session::flash('table', 'Desk is already disabled');
            $desks = Desk::all();

            return view(('admin.list-of-tables'), compact('desks'));
        }
    }
}
