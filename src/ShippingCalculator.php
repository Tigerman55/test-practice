<?php

declare(strict_types=1);

namespace TestPractice;

use TestPractice\Entity\Order;

final class ShippingCalculator
{
    public function orderHasFreeShipping(Order $order): bool
    {
        $orderWeight = 0;

        foreach ($order->getItems() as $item) {
            $orderWeight += $item->getWeight();
        }

        if ($orderWeight > 25) {
            return false;
        }

        return true;
    }
}