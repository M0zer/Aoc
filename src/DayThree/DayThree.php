<?php

namespace M0zer\Aoc\DayThree;

class DayThree
{
    public function read()
    {
        $map = fopen('map.txt', 'r') ;
        $i = 0;
        while (!feof($map)) {
            $line = fgets($map);
            $lines[$i] = $line;
            $i++;
        }
        return $lines;
    }
    public function map()
    {
        $index = 0 ;
        $db = 0;
        $map = $this->read();
        $length = strlen($map[0]);
        for ($i = 0; $i < count($map); $i++) {
            $mapline = $map[$i];
            if ($mapline[$index] == '#') {
                $db = $db + 1;
            }
            $index = $index + 3;
            if ($index > $length - 2) {
                $index = $index - $length + 1;
            }
        }
        return $db;
    }
}
