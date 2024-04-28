<?php

namespace HopekellDev\LaravelWHMCS\Facades;

use Illuminate\Support\Facades\Facade;

class WHMCS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'whmcs';
    }
}
