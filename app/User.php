<?php

namespace myRoommie;

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
        'firstName','lastName', 'email','phone', 'password','sex'
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

}
