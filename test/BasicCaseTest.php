<?php

declare(strict_types=1);

namespace TestPractice\Test;

use PHPUnit\Framework\TestCase;

final class BasicCaseTest extends TestCase
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