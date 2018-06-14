<?php

namespace myRoommie;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use myRoommie\Notifications\HostellerResetPasswordNotification;

class Hosteller extends Authenticatable
{
    use Notifiable;

    protected $guard = 'hosteller';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email','phone', 'password','role',
        'hostel_id','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new HostellerResetPasswordNotification($token));
    }
}
