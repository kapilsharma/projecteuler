<?php

// 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

// 20 19 18 17 16 15 14 13 12 11 - 10 9 8 7 6 5 4 3 2 1
// If number is dividev by 11 - 20, it will be divided by 1 - 10 as well


function isDividedByAll($number) {
	$range = range(11,20);
	foreach ($range as $value) {
		if ($number % $value > 0) {
			return false;
		}
	}

	return true;
}

$test = 20;

while (!isDividedByAll($test)) {
	$test += 20;
}

echo "Number is " . $test . PHP_EOL;