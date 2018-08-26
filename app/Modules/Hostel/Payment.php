<?php

namespace myRoommie\Modules\Hostel;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\Modules\Hostel\Payment
 *
 * @property int $id
 * @property string $account_name
 * @property string $account_number
 * @property string $bank_name
 * @property string $bank_location
 * @property string|null $vodafone
 * @property string|null $mtn
 * @property string|null $airtel
 * @property string|null $tigo
 * @property int $hostel_id
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereAirtel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereBankLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereHostelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereMtn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereTigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\Modules\Hostel\Payment whereVodafone($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['hostel'];


    public $timestamps = false;
    /*
     *  Get the hostel that provided the payment protocols
     * */

    public function hostel()
    {
        $this->belongsTo('myRoommie\Modules\Hostel\Hostel');
    }
}
