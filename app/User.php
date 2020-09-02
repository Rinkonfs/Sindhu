<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Address;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'isAdmin'
    ];

    protected $hidden = [
        'password', 'remember_token','role',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
