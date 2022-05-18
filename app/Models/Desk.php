<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat_number'
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getSeatNumber($desk_id)
    {
        $desk = Desk::find($desk_id);
        $seatNumber = $desk->seat_number;

        return $seatNumber;
    }
}
