<?php

namespace Exdeliver\Cart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class CausewayCartServiceFacade
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
        return 'cartservice';
    }
}
