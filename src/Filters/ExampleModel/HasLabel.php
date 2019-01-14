<?php

namespace ModelSearch\Filters\ExampleModel;

use Illuminate\Database\Eloquent\Builder;
use ModelSearch\Contracts\Filter;

class HasLabel implements Filter
{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed   $value
     *
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('label_'.$value, true);
    }
}
