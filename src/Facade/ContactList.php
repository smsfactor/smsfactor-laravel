<?php

namespace SMSFactor\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

class ContactList extends Facade
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
        return 'SMSFactor\ContactList';
    }
}
