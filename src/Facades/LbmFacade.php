<?php

namespace Synalek\Tdee\Facades;

class LbmFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lbm';
    }
}