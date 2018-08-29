<?php

namespace myRoommie;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use myRoommie\Modules\Hostel\HostellerHostel;
use myRoommie\Notifications\HostellerResetPasswordNotification;
use Illuminate\Auth\Passwords\CanResetPassword;


/**
 * myRoommie\Hosteller
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email
 * @property string $phone
 * @property string $role
 * @property string $password
 * @property int $status
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\HostellerSocialAccount[] $accounts
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Hostel[] $hostel
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $full_name
 */
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
        'firstName','lastName', 'email','phone', 'password','role', 'avatar'
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

    public function hostel()
    {
        return $this->belongsToMany('myRoommie\Modules\Hostel\Hostel','hosteller_hostel','hosteller_id','hostel_id')
            ->using(HostellerHostel::class)
            ->withPivot('hosteller_id','hostel_id')
            ->as('management');
    }

    public function hostelRegistration()
    {
           return $this-> hasMany('myRoommie\Modules\HostelRegistration');


    }

    public function accounts()
    {
        return $this->hasMany(HostellerSocialAccount::class);
    }


    /*
     * Get the hosteller full name
     * */
    public function getFullNameAttribute()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}
