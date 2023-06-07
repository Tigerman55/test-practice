<?php

declare(strict_types=1);

namespace TestPractice\Factory;

use TestPractice\Entity\Order;
use TestPractice\Entity\OrderItem;

final class OrderFactory
{
    public static function containingOnePoundPartNumber(): Order
    {
        return new Order([new OrderItem('UNI1401', 1, 1)]);
    }

    public static function containingTwentyFivePoundPartNumber(): Order
    {
        return new Order([new OrderItem('UNI1401', 1, 25)]);
    }

    public static function containingTwentySixPoundPartNumber(): Order
    {
        return new Order([new OrderItem('UNI1401', 1, 26)]);
    }
}