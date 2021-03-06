<?php

namespace SMSFactor\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

class Campaign extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'SMSFactor\Campaign';
    }
}
