<?php

namespace Exdeliver\Cart\ServiceProviders;

use Exdeliver\Cart\Domain\Services\CartService;
use Illuminate\Support\ServiceProvider;

/**
 * Class CartServiceProvider.
 */
class CartServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = 'Exdeliver\Cart\Controllers';

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Boot.
     */
    public function boot()
    {
        $this->getConfiguration();
        $this->getClassBindings();
    }

    /**
     * Configuration.
     */
    public function getConfiguration()
    {
        $packageRootDir = __DIR__.'/../..';

        $this->mergeConfigFrom($packageRootDir.'/config/cart.php', 'cart');

        $this->publishes([
            $packageRootDir.'/assets/compiled' => public_path('vendor/exdeliver/cart'),
        ], 'public');
    }

    /**
     * Class bindings for facades services.
     */
    public function getClassBindings()
    {
        $this->app->singleton('exdelivercartservice', function () {
            return app(CartService::class);
        });
    }
}
