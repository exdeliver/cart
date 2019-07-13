## EXdeliver Cart
Cart implementation for shops
Written by Jason Hoendervanger - EXdeliver.nl

### Requirements
System requirements for running this content management system:

    PHP 7.1.3 or later

##### Howto install
composer require exdeliver/cart

Add to your app.php providers & Aliases

    \Exdeliver\Cart\ServiceProviders\CartServiceProvider::class,
    
    'Cart' => \Exdeliver\Cart\Facades\CartServiceFacade::class,