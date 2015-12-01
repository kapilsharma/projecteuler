<?php

$limit = 4000000;
$sum = 0;

$number1 = 1;
$number2 = 2;

while ($number2 < $limit) {
	if ($number2 % 2 == 0) {
		$sum += $number2;
	}

	// Simple swap;
	$temp = $number1 + $number2;
	$number1 = $number2;
	$number2 = $temp;
}

echo "Sum is " . $sum . PHP_EOL;