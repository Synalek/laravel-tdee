<?php

namespace Synalek\Facade\Tdee;

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