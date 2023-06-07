<?php

declare(strict_types=1);

namespace TestPractice\Test;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use TestPractice\Entity\Order;
use TestPractice\Factory\OrderFactory;
use TestPractice\ShippingCalculator;

final class FreeShippingCalculatorTest extends TestCase
{
    private ShippingCalculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new ShippingCalculator();
    }

   #[Test, DataProvider('dataSetsToTestAgainstFreeShipping')]
    public function ordersUnder25PoundsCanShipFree(bool $shouldHaveFreeShipping, Order $order): void
    {
        $this->assertEquals($shouldHaveFreeShipping, $this->calculator->orderHasFreeShipping($order));
    }

    public static function dataSetsToTestAgainstFreeShipping(): array
    {
        return [
            [true, OrderFactory::containingOnePoundPartNumber()],
            [true, OrderFactory::containingTwentyFivePoundPartNumber()],
            [false, OrderFactory::containingTwentySixPoundPartNumber()],
            [false, OrderFactory::withShippingFromHawaiiAndUnderTwentyFivePounds()],
        ];
    }
}