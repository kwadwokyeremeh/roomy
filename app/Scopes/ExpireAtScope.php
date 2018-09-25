<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 9/24/18
 * Time: 5:44 PM
 */

namespace myRoommie\Scopes;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class ExpireAtScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('end_date','>', Carbon::now());
    }


}
