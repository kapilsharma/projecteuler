<?php

// A palindromic number reads the same both ways. The largest palindrome made from the product
// of two 2-digit numbers is 9009 = 91 × 99.

// Find the largest palindrome made from the product of two 3-digit numbers.

function isPalindrome($string)
{
	if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {
		if (strlen($string) > 3) {
			return isPalindrome(substr($string,1,strlen($string) -2));
		} else {
			return true;
		}
	} else {
		return false;
	}
}

$largestPalindrome = 0;

for ($i = 999; $i >=900; $i--) {
	for ($j = 999; $j >= 900; $j--) {
		$number = $i * $j;
		if (isPalindrome(strval($number))) {
			$largestPalindrome = ($largestPalindrome > $number) ? $largestPalindrome : $number;
		}
	}
}

echo "Largest palindrome = " . $largestPalindrome . PHP_EOL;