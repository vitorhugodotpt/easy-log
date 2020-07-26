<?php

namespace VitorHugoDotPt\EasyLog\Facades;

use Illuminate\Support\Facades\Facade;

class EasyLog extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'easylog';
    }
}
