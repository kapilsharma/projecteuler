<?php

function getSumOfNumbers($number)
{
	if ($number == 1) {
		return 1;
	} else {
		return $number + getSumOfNumbers($number - 1);
	}
}

function getSumOfSquareOfNumbers($number)
{
	if ($number == 1) {
		return 1;
	} else {
		return ($number * $number) + getSumOfSquareOfNumbers($number - 1);
	}
}

$sumOfNumber = getSumOfNumbers(100);
$squareOfSumOfNumbers = $sumOfNumber * $sumOfNumber;
$sumOfSquareOfNumbers = getSumOfSquareOfNumbers(100);

echo "Diff is = " . ($squareOfSumOfNumbers - $sumOfSquareOfNumbers);