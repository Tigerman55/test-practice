<?php

declare(strict_types=1);

namespace TestPractice\Entity;

final readonly class Order
{
    public function __construct(private array $items)
    {
    }

    /** @return OrderItem[] */
    public function getItems(): array
    {
        return $this->items;
    }
}