<?php

namespace myRoommie;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Auth\MustVerifyEmail;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use myRoommie\Modules\Hostel\HostellerHostel;
use Illuminate\Auth\Passwords\CanResetPassword;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use myRoommie\Observers\HostellerHostelObserver;
use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use myRoommie\Notifications\HostellerCreatedNotification;
use myRoommie\Notifications\HostellerResetPasswordNotification;
use myRoommie\Notifications\HostellerCreateNewPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;


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
 * @property string|null $email_verified_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereEmailVerifiedAt($value)
 * @property string|null $avatar
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Hosteller ofRole($role)
 */


class Hosteller extends Authenticatable implements MustVerifyEmailContract, HasMedia
{
    use MustVerifyEmail, Notifiable, PivotEventTrait,HasMediaTrait;

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

    protected static function boot()
    {
        parent::boot();

        //self::observe(HostellerHostelObserver::class);

        static::pivotAttaching(function ($hosteller, $relationName, $pivotIds, $pivotIdsAttributes) {
           // dd($relationName,$pivotIds,array_pluck($pivotIdsAttributes,'creation_state'),$hosteller->hostel->sortBy('updated_at')->pluck('name'),$hosteller);
        });

        static::pivotAttached(function ($hosteller, $relationName, $pivotIds, $pivotIdsAttributes) {
                $implode =implode(',',array_flatten($pivotIdsAttributes));

            if ( $implode == 'CREATOR'){
                //Send a welcome message and a link to continue registration
                $hosteller->notify(new HostellerCreatedNotification($hosteller));
            }
            elseif($implode == 'CREATED'){

                //Send a password reset notification
                $token = str_random(64);
                DB::table('hostellers_password_resets')->insert([
                    'email'=>$hosteller->email,
                    'token'=>Hash::make($token),
                    'created_at'=>now()->toDateTimeString(),
                ]);
                $hosteller->notify(new HostellerCreateNewPasswordNotification($hosteller,$token));

            }
            //dd($model,$relationName,$pivotIds,$pivotIdsAttributes,$model->hostel->pluck('name'));

        });

        static::pivotDetaching(function ($model, $relationName, $pivotIds) {
            //
        });

        static::pivotDetached(function ($model, $relationName, $pivotIds) {
            //
        });

        static::pivotUpdating(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {
            //
        });

        static::pivotUpdated(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {
            //
        });
    }

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


    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }

    /**
     * Route notifications for the mail channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }


    public function hostel()
    {
        return $this->belongsToMany(Hostel::class,'hosteller_hostel','hosteller_id','hostel_id')
            ->using(HostellerHostel::class)->as('management')
            ->withPivot('hosteller_id','hostel_id')
            ->withTimestamps();
    }

    /**
     * Scope a query to only include hostellers of a given role.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $role
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfRole($query, $role)
    {
        return $query->where('role',$role);
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
        return ucwords("{$this->firstName} {$this->lastName}");

    }



    /**
     * Retrieve the hostel belonging to this hosteller
     * @param Request $hostelName
     * @return Hostel $hostel
     */

    public static function getHostel($hostelName)
    {
        return static::findOrFail(auth('hosteller')->id())->hostel()->whereSlug($hostelName)->firstOrFail();
    }


    /*
    *  This method applies media conversion to the uploaded multimedia files
    * */

    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile()
            ->registerMediaConversions(function (Media $media = null) {
                $this->addMediaConversion('thumb')
                    ->width(160)
                    ->height(160)
                    ->sharpen(10);


            });
    }
}
