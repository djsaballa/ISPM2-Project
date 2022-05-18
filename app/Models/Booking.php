<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Desk;

class Booking extends Model
{
    use HasFactory;

    public static function newBooking($data)
    {
    $booking = new static;
        $booking->fill($data);
        if ($booking->save()) {
            return $booking;
        }
        return false;
    }

    protected $fillable = [
        'user_id',
        'desk_id',
        'date'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserFullName($user_id)
    {
        $userFullName = User::getFullName($user_id);

        return $userFullName;
    }

    public function getSeatNumber($desk_id) 
    {
        $seatNumber = Desk::getSeatNumber($desk_id);

        return $seatNumber;
    }
}
