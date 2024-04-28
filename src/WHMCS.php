<?php

namespace HopekellDev\LaravelWHMCS;

use DarthSoup\WhmcsApi\WhmcsApi;

class WHMCS
{
    protected $api;

    public function __construct()
    {
        $this->api = new WhmcsApi();
    }

    // Implement WHMCS API methods here
}
