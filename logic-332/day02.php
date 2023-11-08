<?php
function f($x) {
	return 3*$x;
}

echo(f(7) . "\n");

$x = 9;
echo(f($x) . "\n");
echo(f(10) . "\n");

$y = 100;
echo(f($y + $x) . "\n");

$z = f($y);
echo($z . "\n");

$out = f(5) * 7; //15*7
echo($out . "\n");

$hasil = f(5) + f($x); //15 + 27
echo($hasil . "\n");

// rumus einstein
function E($m, $c) {
	$result = $m * $c *$c;
	return $result;
}

$einstein = E(3, 5);
echo($einstein . "\n");

$x = $einstein + $out;
echo($x . "\n");

// menghitung arus listrik
function V($i, $r) {
	return $i * $r;
}

function I($v, $r) {
	return $v / $r;
}

function R($v, $i) {
	return $v / $i;
}

$i = 20;
$r = 15;

$volt = V($i, $r);
$arus = I($volt, $r);
$resist = R($volt, $arus);

echo("Volt = " . $volt ."\n");
echo("Arus = " . $arus . "\n");
echo("Resist = " . $resist . "\n");

//keliling lingkaran 2 pi r
function kelilingLingkaran($r) {
	$pi = 3.14;
	return 2 * $pi *$r;
}
echo(kelilingLingkaran(7) . "\n");

//$a $A case-sensitive
define("pi", 3.14);
echo(pi . "\n");

//luas lingkaran
function luasLingkaran($r) {
	return pi * $r * $r;
}
echo(luasLingkaran(5) . "\n");

//input nama
//output Hello Eka
//function lebih dari satu adalah string atau disebut prosedur
function greet($nama) {
	echo("Welcome $nama\n");
	echo("Hello $nama\n");
	echo("Greeting $nama\n\n");
}
greet("Eka");

function sapa($nama) {
	return "Welcome $nama\nHello $nama\nGreeting $nama\n";
}
echo(sapa("Satria"));

/*
//nyoba function local scope
function localScope() {
	$l = 5;
	echo("fungsi l di dalam variabel: $l\n");

}
localScope();

//nyoba function global keyword
function gk() {
	global $x, $y;
	$y = $x + $y;
}
$x = 20;
$y = 5;

gk();
echo $y;
*/

//operator

$a = 10;
$b = 5;
//arithmetic operator
echo($a % $b . "\n");
echo($a ** $b . "\n\n");

//assignment operator
echo(($a += $b) . "\n"); //$a = $a + $b <- a = 15
echo(($a -= $b) . "\n"); //$a = $a - $b <- 15 = 15 - 5 <- 10
echo(($a *= $b) . "\n"); //$a = $a * $b <- 10 = 10 * 5 <- 50
echo(($a /= $b) . "\n"); //$a = $a / $b <- 50 = 50 / 5 <- 10
echo(($a %= $b) . "\n"); //$a = $a % $b <- 10 = 10 % 5 <- 0

//comparison operator
$p = 5;
$q = 5;
echo(($p == $q) . "\n"); //equal -> true/false
echo(($p === $q) . "\n"); //return true jika p=q dengan tipe data yang sama
echo(($p != $q) . "\n"); //not equal -> true/false
echo(($p <> $q) . "\n"); //not equal -> true/false
echo(($p !== $q) . "\n"); //return true jika p tidak sama dengan q, atau tipenya tidak sama
echo(($p > $q) . "\n"); //p lebih besar dari q
echo(($p < $q) . "\n"); //p lebih kecil dari q
echo(($p >= $q) . "\n"); //p lebih besar atau sama dengan q
echo(($p <= $q) . "\n"); //p lebih kecil atau sama dengan q
//increment/decrement operator

echo((++$p) . "\n"); //($p = $p + 1) increment p dengan l, kemudian return p
echo(($p++) . "\n"); //($p = $p + 1) return p, increment p dengan l, kemudian return p
echo(($p) . "\n"); //($p = $p + 1 +1)
echo((--$p) . "\n"); //($p = $p - 1) increment p dengan l, kemudian return p
echo(($p--) . "\n"); //($p = $p - 1) return p, increment p dengan l, kemudian return p
echo(($p) . "\n"); //($p = $p - 1 - 1)

//logical operator
$r = true; $s = true;
echo(($r and $s) . "\n"); //salah satunya false maka false (bisa pakai simbol &&)
echo(($r or $s) . "\n"); //salah satunya true maka true (bisa pakai simbol ||)
echo(($r xor $s) . "\n"); //jika salah satunya true maka true, tapi tidak duanya
echo((!$p) . "\n"); //tidak p

//string operator
$t = "String1 ";
$u = "String2 ";
echo(($t . $u) . "\n"); //concatenation

$t .= $u;
echo($t . "\n");
$t .= $u;
echo($t . "\n");
$t .= $u;
echo($t . "\n");

echo(strtolower($t) . "\n"); //merubah menjadi huruf kecil semua
echo(strtoupper($u) . "\n"); //merubah menjadi huruf besar semua
echo(strlen($t) . "\n"); //return panjang(int) string
echo(strrev($t) . "\n"); //return reversed string $t
echo(strpos($t, "2") . "\n");
echo(str_replace("String2", "Kata", $t) . "\n"); //mengganti kata

$str = "Xsis Academy Batch 332 PHP";
echo(substr($str, 0, 4) . "\n"); //dimulai dari karakter 0 yang diambil 4 karakter
echo(substr($str, 4, 7) . "\n"); //dimulai dari karakter 4 yang diambil 7 karakter



//latihan
/* 1. buatlah function untuk mengganti spasi menjadi separator
	contoh : input : Xsis Academy
		output : Xsis;Academy 
*/
	function gantiSpasi($input, $separator) {
		$output = str_replace(' ', $separator, $input);
		return $output;
	}
		$input = "Eka Maheswara";
		$separator = ";";
		$output = gantiSpasi($input, $separator);
		echo ($output . "\n");

/* 2. buatlah function untuk menukar 3 karakter depan kebelakang dan 3 karakter belakang kedepan
	contoh : input : academy
		output : emydaca
		input : beruang, output : anguber
*/
	function tukarNama($i) {
		$d = substr($i, 0, 3);
		$t = substr($i, 3,-3);
		$b = substr($i, -3);
			return $b . $t . $d;
		}
		echo (tukarNama("academy") . "\n");
		echo (tukarNama("beruang") . "\n");

	// Jawaban Matthew
	function swapCharacter($string) {
		$length = strlen($string);
		
		$front = substr($string, 0, 3);
		$middle = substr($string, 3, $length - 6);
		$end = substr($string, -3);

		return $end . $middle . $front;
	}
	$hasil = swapCharacter("academy");
	echo $hasil . "\n";
	$hasil = swapCharacter("beruang");
	echo $hasil . "\n";

?>
