<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\ReservationDate
 *
 * @property int $id
 * @property int $hostel_id
 * @property int $reservation_duration
 * @property string $reservation_start_date
 * @property string $reservation_end_date
 * @property string $booking_start_date
 * @property string $booking_end_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereBookingEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereBookingStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereReservationDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereReservationEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereReservationStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\ReservationDate whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \myRoommie\Modules\Hostel\Hostel $hostel
 */
class ReservationDate extends Model
{
    protected $fillable = [
        'hostel_id',
        'reservation_duration',
        'reservation_start_date',
        'reservation_end_date',
        'booking_start_date',
        'booking_end_date',
    ];


    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}


