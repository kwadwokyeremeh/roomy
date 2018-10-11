<?php

namespace myRoommie;


use myRoommie\Events\UserSaved;
use myRoommie\Events\UserDeleted;
use myRoommie\Events\UserUpdated;
use Illuminate\Auth\MustVerifyEmail;
use myRoommie\Modules\Hostel\Comment;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Notifications\Notifiable;
use myRoommie\Modules\Booking\Reservation;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Illuminate\Auth\Notifications\VerifyEmail;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use myRoommie\Notifications\UserResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;


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
 * @property string|null $email_verified_at
 * @property-read mixed $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereEmailVerifiedAt($value)
 * @property-read \myRoommie\Modules\Booking\Reservation $reservation
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property string|null $avatar
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\User whereAvatar($value)
 */
class User extends Authenticatable implements MustVerifyEmailContract, HasMedia
{
    use MustVerifyEmail, Notifiable, HasMediaTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone', 'password', 'sex', 'avatar',
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
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'deleted' => UserDeleted::class,
        'updated' => UserUpdated::class,
    ];


    /*
     * This sends an email verification
     *
     * */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPasswordNotification($token));
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
        return $this->hasOne(Reservation::class);
    }


    /**
     * Get the gender of a user.
     *
     * @param  string $value
     * @return string
     */
    public function getSexAttribute($value)
    {
        if ($value == 'M') {
            $value = 'Male';
        } else {
            $value = 'Female';
        }
        return $value;

    }
    /**
     * Set the gender of a user.
     *
     * @param  string $value
     * @return string
     */
    public function setSexAttribute($value)
    {
        $v = mb_strtolower($value);
        if ($v == 'm' || $v == 'male') {
            $v = 'M';
        } else {
            $v = 'F';
        }
        $this->attributes['sex'] = $v;

    }

    /*
    * Get the user full name
    * */
    public function getFullNameAttribute()
    {
        return ucwords("{$this->firstName} {$this->lastName}");
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
