<?php

namespace myRoommie\Modules\Booking;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use myRoommie\Modules\Hostel\Hostel;
use myRoommie\Modules\Hostel\Room;
use myRoommie\User;

/**
 * myRoommie\Modules\Booking\Reservation
 *
 * @property int $id
 * @property string $token
 * @property int $hostel_id
 * @property int $room_id
 * @property string $start_date
 * @property string $end_date
 * @property float $amount_to_be_paid
 * @property int $payment_method_id
 * @property int $user_id
 * @property int $status
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\myRoommie\Modules\Booking\Reservation onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereAmountToBePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Booking\Reservation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\myRoommie\Modules\Booking\Reservation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\myRoommie\Modules\Booking\Reservation withoutTrashed()
 * @mixin \Eloquent
 */
class Reservation extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'token',
        'start_date',
        'end_date',
        'amount_to_be_paid',
        'hostel_id',
        'room_id',
        'payment_method_id',
        'user_id'
    ];

    /*
     *
     *  Get the reservations associated with the room
     * */

    public function room()
    {
        $this->belongsTo(Room::class);
    }

    /*
     *
     *  Get the reservations associated with the hostel
     * */
    public function hostel()
    {
        $this->belongsTo(Hostel::class);
    }

    /*
     *
     *  Get the reservations associated with the a user
     * */
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function paymentMethod()
    {
        $this->belongsTo(PaymentMethod::class);
    }

    /*
     *  Check whether the selected room is full
     *
     * @param $room
     * @return bool $isRoomFull
     * */

    public function isRoomFull($room)
    {
        $reservedBeds = $this->where('room_id',$room)->get();
        $roomDetails = Room::where('id',$room)->first();
        $rs = $roomDetails->roomDescription->number_of_beds;

        if (count($reservedBeds)<$rs){
            $isRoomFull = false;
        }elseif (count($reservedBeds)==$rs){
            $isRoomFull = true;
        }else{
            $isRoomFull =true;
        }

        return $isRoomFull;
    }

}
