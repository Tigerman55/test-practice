<?php

declare(strict_types=1);

namespace TestPractice;

use PHPUnit\Framework\TestCase;

final class BasicTestCase extends TestCase
{
    public function testCase(): void
    {
        $this->assertTrue(true);
    }

    public function testAnotherTestCase(): void
    {
        $this->assertFalse(false);
    }
}