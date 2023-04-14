<?php

declare(strict_types=1);

namespace TestPractice;

final class NumeralConverter
{
    public function numericToRoman(int $value): string
    {
        $currentValue = $value;
        $result = '';
        while ($currentValue > 0) {
            switch ($currentValue) {
                case $currentValue % 9 === 0:
                    $result .= 'IX';
                    $currentValue -= 9;
                    break;
                case $currentValue % 5 === 0:
                    $result .= 'V';
                    $currentValue -= 5;
                    break;
                case $currentValue % 4 === 0:
                    $result .= 'IV';
                    $currentValue -= 4;
                    break;
                default:
                    $result .= 'I';
                    $currentValue--;
                    break;
            }
        }
        return $result;

    }
}