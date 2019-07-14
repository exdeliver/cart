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
    
##### Commands

Add to cart

    Cart::add([
            'product_id' => $product->id,
            'name' => $product->name,
            'gross_price' => $product->price,
            'vat' => $product->vat,
            'quantity' => 1,
            'type' => 'item', // or discount  
    ]);
    
    Cart::subtotal()
    
    Cart::vats()
    
    Cart::total()
    
    Cart::vatTotal()
    
    Cart::discounts()
    
    Cart::summary() // Returns all of above in json format.
    
Use the above like the following example

    <table class="table">
        <thead>
        <th>
            {{ __('Product') }}
        </th>
        <th>
            {{ __('Quantity') }}
        </th>
        <th>
            {{ __(' Gross Total') }}
        </th>
        </thead>
        @foreach($order->items()->where('type','item')->get() as $item)
            <tr>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    {{ $item->quantity }}
                </td>
                <td>
                    {!! Akaunting\Money\Money::EUR($item->quantity * $item->gross_price)->format() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
    
            </td>
            <td>
                <strong>{{ __('Subtotal') }}</strong>
            </td>
            <td>
                {!! \Akaunting\Money\Money::EUR($subtotal) !!}
            </td>
        </tr>
        <tr>
        @foreach($vats as $vat)
            <tr>
                <td>
    
                </td>
                <td>
                    <strong>{{ __('VAT') }} {{ $vat['vat']+0 }}%</strong>
                </td>
                <td>
                    {!! $vat['formatted_amount'] !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
    
            </td>
            <td>
                <strong>{{ __('Total') }}</strong>
            </td>
            <td>
                {!! \Akaunting\Money\Money::EUR($total) !!}
            </td>
        </tr>
    </table>