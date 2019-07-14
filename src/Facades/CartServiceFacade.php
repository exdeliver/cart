<?php

namespace Exdeliver\Cart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CartServiceFacade
 *
 * @package Exdeliver\Cart\Facades
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
