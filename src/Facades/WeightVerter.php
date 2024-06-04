<?php

namespace Raihan\WeightVerter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Raihan\WeightVerter\WeightVerter
 */
class WeightVerter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Raihan\WeightVerter\WeightVerter::class;
    }
}
