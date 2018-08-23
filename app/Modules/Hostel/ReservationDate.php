<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

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
        $this->belongsTo(Hostel::class);
    }
}


