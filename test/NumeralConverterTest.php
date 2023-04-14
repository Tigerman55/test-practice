<?php

declare(strict_types=1);

namespace TestPractice\Test;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use TestPractice\NumeralConverter;

final class NumeralConverterTest extends TestCase
{

    #[Test, DataProvider('dataSetsForConversion')]
    public function convertsNumericToRoman(int $input, string $expected): void
    {
        $nc = new NumeralConverter();
        $this->assertEquals($expected, $nc->numericToRoman($input));
    }

    public static function dataSetsForConversion(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [9, 'IX']
        ];
    }
}