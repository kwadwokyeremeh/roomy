<?php

namespace myRoommie;

use Illuminate\Database\Eloquent\Model;

/**
 * myRoommie\HostellerSocialAccount
 *
 * @property int $id
 * @property int $hosteller_id
 * @property string|null $provider_name
 * @property string|null $provider_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \myRoommie\Hosteller $hosteller
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\HostellerSocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\HostellerSocialAccount whereHostellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\HostellerSocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\HostellerSocialAccount whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\HostellerSocialAccount whereProviderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\myRoommie\HostellerSocialAccount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HostellerSocialAccount extends Model
{
    protected $fillable = [
        'provider_name', 'provider_id'
    ];

    public function hosteller()
    {
        return $this->belongsTo(Hosteller::class);
    }
}
