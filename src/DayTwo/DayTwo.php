<?php

namespace M0zer\Aoc\DayTwo;

class DayTwo
{
    public function password()
    {
        $end = fopen('test.txt', 'r') ;
        $darab = 0;
        while (!feof($end)) {
            $line = fgets($end);
            $d = explode(" ", $line); /** sor */
            $kulcs = explode("-", $d[0]);/** darabszám */
            $betu = substr($d[1], -2, 1); /*azonosító*/
            $pw = $d[2]; /*jelszó*/
            $db = 0;
            for ($i = 0; $i < strlen($pw); $i++) {
                if ($pw[$i] == $betu) {
                    $db = $db + 1;
                }
            }
            if ($db > $kulcs[0] - 1 && $db < $kulcs[1] + 1) {
                $darab = $darab + 1;
            }
        }
        return $darab;
    }
    public function david(int $a)
    {
        return $a + 1;
    }
}
