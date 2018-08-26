<?php

namespace myRoommie\Modules;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Transaction
 *
 * @property int $id
 * @property int $hostel_id
 * @property int $room_id
 * @property int $receiver_id
 * @property int $payee_id
 * @property int $booking_id
 * @property float $service_fee
 * @property float $myroommie_service_fee
 * @property float $amount
 * @property string $transfer_on
 * @property int $promo_code_id
 * @property float $discounted_amount
 * @property int $status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereDiscountedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereMyroommieServiceFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction wherePayeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction wherePromoCodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereServiceFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereTransferOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Transaction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Transaction extends Model
{
    //
}
