<?php

declare(strict_types=1);

namespace TestPractice\Entity;

final readonly class OrderItem
{
    public function __construct(private string $partNumber, private int $quantity, private int $weight)
    {
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}