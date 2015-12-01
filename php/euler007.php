<?php
// By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

// What is the 10 001st prime number?

function isPrime($number) {
	// As special case, 2 is prime.
	if ($number == 2) {
		return true;
	}

	// Even numbers (divided by 2) can't be prime
	if ($number % 2 == 0) {
		return false;
	}

	// Lets check form 3 to sqrt(number)
	for ($i = 3; $i <= sqrt($number); $i += 2) {
		if ($number % $i == 0) {
			return false;
		}
	}

	return true;
}

$primeFound = 0;
$lastPrime = null;
$check = 2;

while ($primeFound < 10001) {
	if (isPrime($check)) {
		$primeFound++;
		$lastPrime = $check;
	}

	$check++;
}

echo "10001th prime is " . $lastPrime . PHP_EOL;