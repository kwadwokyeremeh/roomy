<?php

namespace myRoommie\Modules;

use myRoommie\Hosteller;
use myRoommie\Modules\Hostel\Hostel;
use Illuminate\Database\Eloquent\Model;



/**
 * myRoommie\Modules\HostelRegistration
 *
 * @property int $hosteller_id
 * @property int $hostel_id
 * @property int $basic_info
 * @property int $hostel_details
 * @property int $add_media
 * @property int $amenities
 * @property int $layout_n_pricing
 * @property int $policies
 * @property int $payment
 * @property int $confirmation
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 * @property-read \myRoommie\Hosteller $hosteller
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereAddMedia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereAmenities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereBasicInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereHostelDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereHostellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereLayoutNPricing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration wherePolicies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\HostelRegistration whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HostelRegistration extends Model
{
    protected $fillable =[
        'hosteller_id',
        'hostel_id',
        'basic_info',
        'hostel_details',
        'add_media',
        'amenities',
        'layout_n_pricing',
        'policies',
        'payment',
        'confirmation',
    ];

    protected $primaryKey ='hosteller_id';

    public function hosteller()
    {
        return $this->belongsTo(Hosteller::class);
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
