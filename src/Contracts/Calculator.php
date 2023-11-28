<?php

namespace Logicalcrow\ShoppingCart\Contracts;

use Logicalcrow\ShoppingCart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
