<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat_number',
        'status'

    ];

    public function getId()
    {
        return $this->id;
    }

    public function getSeat()
    {
        return $this->seat_number;
    }

    public static function getSeatNumber($desk_id)
    {
        $desk = Desk::find($desk_id);
        $seatNumber = $desk->seat_number;

        return $seatNumber;
    }

    public static function getStatus($desk_id)
    {
        $desk = Desk::find($desk_id);
        $status = $desk->status;

        if($status) {
            return 'Enabled';
        } else {
            return 'Disabled';
        }
    }
}
