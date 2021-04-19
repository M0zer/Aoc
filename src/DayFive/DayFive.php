<?php

namespace M0zer\Aoc\DayFive;

class DayFive
{
    public function seatId()
    {
        $file = fopen('DayFive.txt', 'r') ;
        $highest = 0;
        while (!feof($file)) {
            $line = fgets($file);
            $lowerRows = 0;
            $upperRows = 127;
            $lowerCollums = 0;
            $upperCollums = 7;
            $collumIndex = 4;
            $rowIndex = 64;
            $row = 0 ;
            $collum = 0;
            for ($i = 0; $i < 7; $i++) {
                if ($line[$i] == 'F') {
                    $upperRows = $upperRows - $rowIndex;
                } else {
                    $lowerRows = $lowerRows + $rowIndex;
                }
                $rowIndex = $rowIndex / 2;
                if ($upperRows == $lowerRows) {
                    $row = $lowerRows;
                }
            }
            for ($i = 7; $i < 10; $i++) {
                if ($line[$i] == 'R') {
                    $lowerCollums = $lowerCollums + $collumIndex;
                } else {
                    $upperCollums = $upperCollums - $collumIndex;
                }
                $collumIndex = $collumIndex / 2;
                if ($upperCollums == $lowerCollums) {
                    $collum = $lowerCollums;
                    echo $collum . PHP_EOL;
                }
            }
            if ($highest < ($row * 8) + $collum) {
                echo $highest . PHP_EOL;
                $highest = ($row * 8) + $collum;
            }
        }
        return $highest;
    }
}
