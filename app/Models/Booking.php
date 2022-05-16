<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function getId()
    {
        return $this->id;
    }
}
