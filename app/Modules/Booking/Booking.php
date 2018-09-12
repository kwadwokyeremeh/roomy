<?php

namespace myRoommie\Modules\Booking;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Booking\Booking
 *
 * @property int $id
 * @property int|null $reservation_id
 * @property int|null $hostel_id
 * @property int|null $room_id
 * @property int|null $payment_method_id
 * @property float|null $tax_paid
 * @property float $services_fee
 * @property float $price
 * @property float $amount_paid
 * @property int $is_refund
 * @property float|null $amount_refunded
 * @property string $start_date
 * @property string $end_date
 * @property int|null $user_id
 * @property int $status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $transaction_id
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereAmountRefunded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereIsRefund($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereServicesFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereTaxPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Booking whereUserId($value)
 * @mixin \Eloquent
 */
class Booking extends Model
{
    //
}
