<?php

namespace myRoommie;

use myRoommie\Modules\Booking\Reservation;
use myRoommie\Modules\Hostel\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * myRoommie\User
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $phone
 * @property string $sex
 * @property string $password
 * @property string|null $image
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\UserSocialAccount[] $accounts
 * @property-read \myRoommie\Modules\Hostel\Bed $bed
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Comment[] $comments
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
