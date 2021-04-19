<?php

use M0zer\Aoc\DayOne\DayOne;
use M0zer\Aoc\DayTwo\DayTwo;
use M0zer\Aoc\DayThree\DayThree;
use M0zer\Aoc\DayFive\DayFive;

require 'vendor/autoload.php';
$a = new DayOne();
echo $a->is2020() . PHP_EOL ;
$b = new DayTwo();
echo $b->password() . PHP_EOL ;
$c = new DayThree();
echo $c->map() . PHP_EOL ;
$e = new DayFive();
echo $e->seatId() . PHP_EOL;
