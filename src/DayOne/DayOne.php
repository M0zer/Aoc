<?php

namespace M0zer\Aoc\DayOne;

class DayOne
{
    public function is2020()
    {
        $k = file('TwentyTwenty.txt');
        for ($i = 0; $i < 198; $i++) {
            for ($j = $i + 1; $j < 199; $j++) {
                if ((int)$k[$i] + (int)$k[$j] == 2020) {
                    (int)$c = (int)$k[$i] * (int)$k[$j];
                    return $c;
                }
            }
        }
    }
}
