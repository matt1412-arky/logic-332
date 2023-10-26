<?php
function f($x)
{
	return 3 * $x;
}
echo (f(7) . "\n");

$x = 9;
echo (f($x) . "\n");
echo (f(9) . "\n");

$y = 100;
echo (f($y + $x) . "\n");

$z = f($y);
echo ($z . "\n");

$out = f(5) * 7;
echo ($out . "\n");

$hasil = f(5) + f($x);
echo ($hasil . "\n");

function E($m, $c)
{
	$return = $m * $c * $c;
	return $return;
}

$einstein = E(3, 5);
echo ($einstein . "\n");

$x = $einstein + $out;
echo ($x . "\n");

function volt($i, $r)
{
	$volt = $i / $r;
	return $volt;
}
$returnv = volt(5, 7);
echo ($returnv . "\n");

function r($i, $v)
{
	$r = $i / $v;
	return $r;
}
$returnr = r(5, 3);
echo ($returnr . "\n");

function i($r, $v)
{
	$i = $r / $v;
	return $i;
}
$returni = i(3, 7);
echo ($returni . "\n");

//keliling lingkaran
function keliling($r)
{
	$pi = 3.14;
	return 2 * $pi * $r;
}
echo (keliling(7 . "\n"));

//Luas lingkaran menggunakan define
define("pi", 3.14);
function luas($r)
{
	return pi * $r * $r;
}
echo (luas(5) . "\n");

//input nama
// output Hello bowo
function greet($nama)
{
	echo ("Welcome $nama \n");
	echo ("Greeting $nama \n");
	echo ("Hello $nama \n");
}

greet("Bowo");

function sapa($nama)
{
	return "welcome $nama\ngreeting $nama\nHello $nama\n";
}
echo (sapa("bowo"));
echo (sapa("Metthew"));
echo (sapa("Vina"));

//belajar sendiri
define("Dnama", "Hore");

function luas1($l)
{
	$p = 3;
	return $p * $l;
}

echo luas1(5) . " Berhasil " . Dnama . "\n";

$a = 10;
$b = 5;
// arithmetic operator
echo ($a % $b . "\n");
echo ($a ** $b . "\n");

// assisment Operator
echo (($a += $b) . "\n"); // $a = $a + $b <- a = 15
echo (($a -= $b) . "\n"); // $a = $a - $b <- 15 - 5 <- a = 10
echo (($a *= $b) . "\n"); // $a = $a * $b <- 10 * 5 <- a = 50
echo (($a /= $b) . "\n"); // $a = $a / $b <- 50 / 5 <- a = 10
echo (($a %= $b) . "\n"); // $a = $a % $b <- 10 % 2 <- a = 0

// comperasion operator
$p = 5;
$q = 5;
echo (($p == $q) . "\n"); //equal -> true/false
echo (($p === $q) . "\n"); //return true jika p=q dengan tipe data yang sama
echo (($p != $q) . "\n"); //not equal -> true/false
echo (($p <> $q) . "\n"); //not equal -> true/false
echo (($p !== $q) . "\n"); //return true jika tidak sama dengan q, atau tipenya tidak sama
echo (($p > $q) . "\n"); // p lebih besar dari q
echo (($p < $q) . "\n"); // p lebih kecil q
echo (($p >= $q) . "\n"); //p lebih besar atau sama dengan q
echo (($p <= $q) . "\n"); //p lebih kecil atau sama dengan q

//increment/decrement operator
echo ((++$p) . "\n"); //increment p dengan 1 , kemudian return p
echo (($p++) . "\n"); //return p, increment p dengan 1
echo (($p) . "\n");
echo ((--$p) . "\n"); //decrement p dengan 1 , kemudian return p
echo (($p--) . "\n"); //return p, decrement p dengan 1
echo (($p) . "\n");

//Logical Operator
$r = true;
$s = true;
echo (($r and $s) . "\n"); //salah satunya false maka false(bisa pake simbol &&)
echo (($r or $s) . "\n"); //salah satunya true maka true(bisa pake simbol ||)
echo (($r xor $s) . "\n"); //salah satunya true maka true, tapi tidak duanya
echo ((!$p) . "\n"); // tidak p

//string operator
$t = "string 1";
$u = "string 2";
echo (($t . $u) . "\n");
$t .= $u;
echo ($t . "\n");
$t .= $u;
echo ($t . "\n");
$t .= $u;
echo (strtolower($t) . "\n");
echo (strtoupper($u) . "\n");
echo (strlen($t) . "\n"); //return panjang (int) string
echo (strrev($t) . "\n"); //return reversed string t
echo (strpos($t, "2") . "\n");
echo (str_replace("String 2", "Kata", $t) . "\n"); //menganti string 2 menjadi kata
$str = "Xsis Academy Batch 332 php";
echo (substr($str, 0, 4) . "\n");
echo (substr($str, 4, 7) . "\n");
//latihan
//1
function gabung($k)
{
	echo str_replace(" ", ";", $k) . "\n";
}

$k = "Xsis Academy";
echo (gabung($k));


//2
function tukar($h)
{

	$i = substr($h, 0, 4);
	$i = strrev($i);
	$e = substr($h, 4, 5);
	return $e . $i;
}
$h = "academy";
echo tukar($h);

// Jawaban Paling cocok
function swapCharacter($string)
{
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
