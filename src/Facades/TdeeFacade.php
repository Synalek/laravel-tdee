<?php

namespace Synalek\Tdee\Facades;

class TdeeFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tdee';
    }
}