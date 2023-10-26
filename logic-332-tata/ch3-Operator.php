<?php
	// - - -   Latihan Operator  - - - //
	$a = 5; $b = 10; $c = 5;

	// - - - Arithmatic Operator - - - //
	$add = $a + $b;		// - - <<-- addition
	$subs = $a - $b;	// - - <<-- substraction
	$mult = $a * $b;	// - - <<-- multiplication
	$div = $a / $b;		// - - <<-- division
	$mod = $a % $b;		// - - <<-- modulus	(sisa hasil bagi (10 / 5 = 2, modulusnya 10 % 5 = 0))
	$expo = $a ** $b;	// - - <<-- exponantiation ($a kuadrat $b)
	
	// - - - Assignment Operator - - - //
	$x = $a;	// - - <<-- assign $a value to $x (expected $x = 5)
	$x += $b;	// - - <<-- assign $x value to sum of $x and $b ($x = $x + $b, expected $x = 5 + 10)
	$x -= $b;	// - - <<-- assign $x value to sub of $x and $b ($x = $x - $b, expected $x = 5 - 10)
	$x *= $b;	// - - <<-- assign $x value to mul of $x and $b ($x = $x * $b, expected $x = 5 * 10)
	$x /= $b;	// - - <<-- assign $x value to div of $x and $b ($x = $x / $b, expected $x = 5 / 10)
	$x %= $b;	// - - <<-- assign $x value to mod of $x and $b ($x = $x % $b, expected $x = 5 % 10)

	// - - - Comparison Operator - - - //
	$a == $b;	// - - <<-- return true if $a and $b value are equal
	$a === $b;	// - - <<-- return true if $a and $b type are equal
	$a != $b; $a <> $b;	// - - <<-- return true if $a and $b value are NOT equal
	$a !== $b;	// - - <<-- return true if $a and $b type are NOT equeal
	$a > $b;	// - - <<-- return true if $a value greater then $b value
	$a < $b;	// - - <<-- return true if $a value lesser then $b value
	$a <= $b;	// - - <<-- return true if $a value lesser or equal to $b value
	$a >= $b;	// - - <<-- return true if $a value lesser or equal to $b value
	$a <=> $b;	// - - <<-- return -1 if $a value lesser then $b value, return 0 if $a and $b are equal, return 1 if $a value greater then $b value

	// - - -   Logical Operator   - - - //
	$x = true; $y = false;

	$x and $y; $x && $y;	// - - <<-- return true if $x is TRUE and $y is TRUE
	$x or $y; $x || $y;		// - - <<-- return true if EITHER $x is TRUE or $y is True
	$x xor $y;	// - - <<-- return true if EITHER $x is TRUE or $y is True, NOT BOTH
	!$x;		// - - <<-- return TRUE if $x is FALSE

?>