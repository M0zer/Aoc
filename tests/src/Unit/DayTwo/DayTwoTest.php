<?php

namespace M0zer\Aoc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use M0zer\Aoc\DayTwo\DayTwo;

class DayTwoTest extends TestCase
{
    public function casesDavid(): array
    {
        return[
            'first' => [
                3,
                2,
            ],
            'second' => [
                0,
                -1,
            ],
        ];
    }

    /**
     * @dataProvider casesDavid
     */
    public function testDavid(int $expected, int $input)
    {
        $actual = (new DayTwo())->david($input);
        static::assertSame($expected, $actual);
    }
}
