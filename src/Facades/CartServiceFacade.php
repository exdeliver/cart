<?php

namespace Exdeliver\Cart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CartServiceFacade.
 */
class CartServiceFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'exdelivercartservice';
    }
}
