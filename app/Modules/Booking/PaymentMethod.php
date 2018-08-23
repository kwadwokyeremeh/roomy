<?php

namespace myRoommie\Modules\Booking;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    /*protected $fillable = [
        'payment_type',
        'shorthand',
        'payment_handler'
    ];*/

    public function reservations()
    {
        $this->hasMany(Reservation::class);
    }
}
