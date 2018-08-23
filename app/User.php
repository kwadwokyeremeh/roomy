<?php

namespace myRoommie;

use myRoommie\Modules\Booking\Reservation;
use myRoommie\Modules\Hostel\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email','phone', 'password','sex', 'avatar','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

/*
 * Get the bed associated with the user
 * */
    public function bed()
    {
        return $this->hasOne('myRoommie\Modules\Hostel\Bed');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function accounts()
    {
        return $this->hasMany(UserSocialAccount::class);
    }

    /*
     * Get the reservation associated with the user
     * */
    public function reservation()
    {
        $this->hasOne(Reservation::class);
    }


    /**
     * Get the gender of a user.
     *
     * @param  string  $value
     * @return string
     */
    public function getSexAttribute($value)
    {
        if ($value=='M') {
            $value = 'Male';
        }else{
            $value='Female';
        }
        return $value;

    }
}
