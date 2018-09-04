<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use myRoommie\Hosteller;
use myRoommie\Modules\Booking\Reservation;
use myRoommie\Modules\HostelRegistration;


/**
 * myRoommie\Modules\Hostel\Hostel
 *
 * @property int $id
 * @property string $name
 * @property string|null $hostel_email
 * @property string|null $hostel_phone
 * @property string|null $alias
 * @property string $slug
 * @property string $street_address
 * @property string $city
 * @property string|null $region
 * @property string|null $country
 * @property float|null $latitude
 * @property float|null $longitude
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Bed[] $beds
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Block[] $blocks
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Entertainment[] $entertainment
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Facility[] $facilities
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Floor[] $floors
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Food[] $food
 * @property-read \myRoommie\Modules\HostelRegistration $hostelRegistration
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\HostelView[] $hostelViews
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Hosteller[] $hosteller
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Misc[] $miscellaneous
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Payment[] $payment
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Policy[] $policies
 * @property-read \myRoommie\Modules\Hostel\ReservationDate $reservationDate
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\RoomDescription[] $roomDescription
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\RoomTypeMedia[] $roomTypeMedia
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Room[] $rooms
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Service[] $services
 * @property-read \Illuminate\Database\Eloquent\Collection|\myRoommie\Modules\Hostel\Utility[] $utilities
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereHostelEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereHostelPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Hostel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Hostel extends Model
{

    protected $fillable = [
        'name','alias',
        //'number_of_blocks',
        'street_address',
        'city',
        'region', 'country',
        'latitude',
        'longitude',
        'hostel_email',
        'hostel_phone',
        //'hosteller_id',
    ];

    /*
     *
     *  Get the hosteller who owns the hostel
     *
     * */
    public function hosteller()
    {
        return $this->belongsToMany(Hosteller::class,'hosteller_hostel','hostel_id','hosteller_id')
            ->using(HostellerHostel::class)->as('management')
            ->withPivot('hosteller_id','hostel_id');
    }

    public function hostelRegistration()
    {
        return $this->hasOne(HostelRegistration::class);
    }

    /*
     *  Get the blocks associated with the hostel
     * */
    public function blocks()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Block');
    }


    /*
     *  Get the floors associated with the hostel
     * */
    public function floors()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Floor');
    }


    /*
     *  Get the rooms  associated with the hostel
     * */
    public function rooms()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Room');
    }


    /*
     *  Get the beds associated with the hostel
     * */
    public function beds()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Bed');
    }


    /*
     *  Get the facilities associated with the hostel
     * */
    public function facilities()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Facility');
    }


    /*
     *  Get the services associated with the hostel
     * */
    public function services()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Service');
    }


    /*
     *  Get the Food and Drinks services associated with the hostel
     * */
    public function food()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Food');
    }


    /*
     *  Get the Prices associated with the hostel
     * */
    public function roomDescription()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\RoomDescription');
    }


    /*
     * Get utilities associated the hostel
     * */
    public function utilities()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Utility');
    }


    /*
     * Get policies associated the hostel
     * */
    public function policies()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Policy');
    }


    /*
     * Get payment protocols associated the hostel
     * */
    public function payment()
    {
        return $this->hasMany('myRoommie\Modules\Hostel\Payment');
    }


    /*
     * Get room types associated the hostel
     * */
    public function roomTypeMedia()
    {
        return $this->hasManyThrough('myRoommie\Modules\Hostel\RoomTypeMedia',RoomDescription::class);
    }

    /*
     * Get views associated with the hostel
     * */
    public function hostelViews()
    {
        return $this->hasMany(HostelView::class);
    }

    /*
     * Get miscellaneous associated with the hostel
     * */
    public function miscellaneous()
    {
        return $this->hasMany(Misc::class);
    }

    /*
     * Get entertainment associated with the hostel
     * */
    public function entertainment()
    {
        return $this->hasMany(Entertainment::class);
    }

    /*
     * Get comments associated the hostel
     * */
    public function comments()
    {
       return $this->hasMany(Comment::class);
    }


    /*
     * Get the reservation date associated the hostel
     * */
    public function reservationDate()
    {
        return $this->hasOne(ReservationDate::class);
    }

    /*
     * Get the reservations associated with the hostel
     * */
    public function reservations()
    {
        //$this->hasMany(Reservation::class);
        $this->hasManyThrough(Reservation::class,Room::class);
    }



    public function slugHostel($request)
    {
        /*
        * Convert the hostel name or alias into a unique URL address
        * */
        if (!is_null($request['alias'])) {
            $uSlug = $request['alias'];
        }else{
            $uSlug =$request['name'];
        }
        $slug =mb_strtolower($uSlug);
        if (str_contains($slug,'hostel')){
            $tSlug =str_slug(str_replace('hostel','',$slug),'');
        }else{
            $tSlug =str_slug($slug,'');
        }

        return $tSlug;
    }

    /*
   * Retrieve hostel default reservation date
     *
     * @return Carbon date
   * */
    public function retrieveDuration()
    {

        if (isset($this->reservationDate->reservation_duration)==true){
            $number = $this->reservationDate->reservation_duration;
            $duration = Carbon::now()->addDays($number);
        }else{
            $duration = Carbon::now()->addDays(3);
        }

        return $duration;
    }

    public function retrieveReservationDateRange()
    {
        if (isset($this->reservationDate->reservation_start_date)==true){
            $startDate = strtotime($this->reservationDate->reservation_start_date);
            $endDate = strtotime($this->reservationDate->reservation_end_date);
        }else{

            $startDate = strtotime('14 February'.Carbon::now()->year);
            $endDate =strtotime('16 October'.Carbon::now()->year);
        }

        return ['startDate'=>$startDate,'endDate'=>$endDate];
    }

}
