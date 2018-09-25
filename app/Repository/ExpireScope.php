<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 9/22/18
 * Time: 2:50 PM
 */

namespace myRoommie\Repository;



use Carbon\Carbon;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;

class ExpiringScope implements Scope
{
    /**
     * All of the extensions to be added to the builder.
     *
     * @var array
     */
    protected $extensions = ['WithExpired', 'OnlyExpired'];

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $column = $model->getQualifiedExpiresAtColumn();

        $builder->where(function($query) use($column) {
            $query
                ->where($column, '>', Carbon::now());
        });

        $this->extend($builder);
    }

    /**
     * Remove the scope from the given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function remove(Builder $builder, Model $model)
    {
        $column = $model->getQualifiedExpiresAtColumn();
        $query = $builder->getQuery();
        $bindingStart = 0;

        // We need to remove the bindings from the query at the same time
        // as removing the where clauses. Bindings are not indexed to
        // be easy to find, so we have to do a little extra work.
        foreach ($query->wheres as $key => $where) {
            $bindingCount = $this->countBindings($where);

            // If we have found the Expiring constraint, we then splice the
            // bindings in the correct position to remove those we found
            // for the constraint, and then we remove the constraint.
            if ($this->isExpiringConstraint($where, $column)) {
                $this->removeBindings($query, $bindingStart, $bindingCount);
                $this->removeConstraint($query, $key);
                break;
            }
            $bindingStart += $bindingCount;
        }
    }

    /**
     * Count the number of bindings that we expect for a where clause.
     *
     * @param $where
     *
     * @return int
     */
    protected function countBindings($where)
    {
        $count = 0;

        // Nested clauses need use to go recursive,
        // otherwise, we do a simple check for
        // a value on the constraint.
        if ($where['type'] == 'Nested') {
            foreach ($where['query']->wheres as $clause) {
                $count += $this->countBindings($clause);
            }
        } elseif (isset($where['value'])) {
            $count ++;
        }

        return $count;
    }

    /**
     * Remove a number of 'Where' bindings, from specified start position.
     *
     * @param $query
     * @param $fromPosition
     * @param $count
     */
    protected function removeBindings(QueryBuilder $query, $fromPosition, $count)
    {
        $bindings = $query->getRawBindings()['where'];

        array_splice($bindings, $fromPosition, $count);
        $query->setBindings($bindings, 'where');
    }

    /**
     * Remove a constraint from the Query
     * @param $query
     * @param $key
     */
    protected function removeConstraint(QueryBuilder $query, $key)
    {
        unset($query->wheres[$key]);
        $query->wheres = array_values($query->wheres);
    }

    /**
     * Extend the query builder with the needed functions.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @return void
     */
    public function extend(Builder $builder)
    {
        foreach ($this->extensions as $extension) {
            $this->{"add{$extension}"}($builder);
        }
    }

    /**
     * Get the "deleted at" column for the builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @return string
     */
    protected function getExpiresAtColumn(Builder $builder)
    {
        if (count($builder->getQuery()->joins) > 0) {
            return $builder->getModel()->getQualifiedExpiresAtColumn();
        } else {
            return $builder->getModel()->getExpiresAtColumn();
        }
    }

    /**
     * Add the with-expired extension to the builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @return void
     */
    protected function addWithExpired(Builder $builder)
    {
        $builder->macro('withExpired', function (Builder $builder) {
            $this->remove($builder, $builder->getModel());

            return $builder;
        });
    }

    /**
     * Add the only-expired extension to the builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @return void
     */
    protected function addOnlyExpired(Builder $builder)
    {
        $builder->macro('onlyExpired', function (Builder $builder) {
            $model = $builder->getModel();
            $column = $model->getQualifiedExpiresAtColumn();

            $this->remove($builder, $model);

            $builder->getQuery()
                ->whereNotNull($column)
                ->where($column, '<=', Carbon::now());

            return $builder;
        });
    }

    /**
     * Determine if the given where clause is a soft delete constraint.
     *
     * @param  array   $where
     * @param  string  $column
     * @return bool
     */
    protected function isExpiringConstraint(array $where, $column)
    {
        return $where['type'] == 'Nested' && $where['query']->wheres[0]['column'] == $column
            && $where['query']->wheres[1]['column'] == $column;
    }
}
