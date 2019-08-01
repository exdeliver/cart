<?php

namespace Exdeliver\Cart\Domain\Entities\Cart;

use Akaunting\Money\Money;

/**
 * Class Item.
 */
class Item
{
    public $id;
    public $product_id;
    public $name;
    public $gross_price;
    public $vat;
    public $quantity;
    public $type;
    public $attributes;

    public function __construct(array $item)
    {
        if (count($item)) {
            foreach ($item as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }

    public function update($params)
    {
        if (count($params) > 0) {
            foreach ($params as $param => $value) {
                $this->{$param} = $value;
            }
        }
    }

    /**
     * @return Money
     */
    public function getPrice()
    {
        return money($this->gross_price, 'EUR');
    }
}
