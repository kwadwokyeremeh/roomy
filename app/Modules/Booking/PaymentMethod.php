<?php

namespace myRoommie\Modules\Booking;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Booking\PaymentMethod
 *
 * @property int $id
 * @property string $payment_type
 * @property string $shorthand
 * @property string|null $payment_handler
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod wherePaymentHandler($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod whereShorthand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $callback
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\PaymentMethod whereCallback($value)
 */
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
