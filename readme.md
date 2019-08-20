## EXdeliver Cart
Cart implementation for shops with VAT per product system. With split VAT functionality.
Written by Jason Hoendervanger - EXdeliver.nl

![alt text](https://ticketsupply.nl/images/exdelivercart.png )


### Requirements
System requirements for running this content management system:

    PHP 7.1.3 or later

##### Howto install
composer require exdeliver/cart

Add to your app.php providers & Aliases

    \Exdeliver\Cart\ServiceProviders\CartServiceProvider::class,
    
    'Cart' => \Exdeliver\Cart\Facades\CartServiceFacade::class,
    
##### Commands

Add to cart

    Cart::add([
            'product_id' => $product->id,
            'name' => $product->name,
            'gross_price' => $product->price,
            'vat' => $product->vat,
            'quantity' => 1,
            'type' => 'item', // item, discount, fee, other (item and other are countable items quantity() )
    ]);
    
    Cart::subtotal()
    
    Cart::vats()
    
    Cart::total()
    
    Cart::vatTotal()
    
    Cart::discounts()
    
    Cart::summary() // Returns all of above in json format.