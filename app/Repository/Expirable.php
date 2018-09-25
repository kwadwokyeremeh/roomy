<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 9/22/18
 * Time: 2:47 PM
 */

namespace myRoommie\Repository;

use Carbon\Carbon;

trait Expirable
{

    /*
     * Here end_date === expires_at
     * */

    public static function bootExpires()
    {
        static::addGlobalScope(new ExpiringScope);

        static::saving(function($model) {
            $model->expires_at = Carbon::now()->addMinutes(15);
        });
    }

    public function willExpire()
    {

        return ! is_null($this->expires_at)
            && $this->expires_at->gt(Carbon::now());
    }

    public function hasExpired()
    {
        return ! is_null($this->expires_at)
            && $this->expires_at->format('Y') > 0
            && $this->expires_at->lt(Carbon::now());
    }

    /**
     * Get the name of the "expires at" column.
     *
     * @return string
     */
    public function getExpiresAtColumn()
    {
        return 'expires_at';
    }

    /**
     * Get the fully qualified "expires at" column.
     *
     * @return string
     */
    public function getQualifiedExpiresAtColumn()
    {
        return $this->getTable().'.'.$this->getExpiresAtColumn();
    }
}
