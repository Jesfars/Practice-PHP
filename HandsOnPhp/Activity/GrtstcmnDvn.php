<!-- Greatest common divisor -->

<?php

function GCD($a, $b) {
	$smallVal = min($a, $b);
	$gcd = 1;

	for ($i = 1; $i <= $smallVal; $i++) {
		if ($a % $i === 0 && $b % $i === 0) {
			$gcd = $i;
		}
	}

	return $gcd;
}

$num1 = 20;
$num2 = 25;

echo GCD($num1,$num2);

?>