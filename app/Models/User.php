<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public static function newUser($data)
    {
        $user = new static;
        $user->fill($data);
        if ($user->save()) {
            return $user;
        }
        return false;
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'department'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getId()
    {
        return $this->id;
    }

    public static function getFullName($user_id)
    {
        $user = User::find($user_id);
        $firstName = $user->first_name;
        $lastName = $user->last_name;

        return $firstName . " " . $lastName; 
    }
}
