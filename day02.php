<?php
function f($x) {
	return 3*$x;
}
echo (f(7) . "\n");

$x = 9;
echo (f($x) . "\n");
echo (f(9) . "\n");

$y = 100;
echo (f($y + 7) . "\n");

$z = f($y);
echo (f($z) . "\n");

$out = f(5) * 7; //15 * 7 = 105
echo (f($out) . "\n");

$hasil = f(5) + f($x); //15 + 27 = 42
echo (f($hasil) . "\n");

//--
function E($m, $c) {

	$result = $m * $c * $c;
	return $result;
}
$einstein = E(3, 5);
echo ($einstein . "\n");
echo ("\n");

//--
function I($v, $r) {
	$result = $v / $r;
	return $result;
}

function R($v, $i) {
	$result = $v / $i;
	return $result;
}

function V($i, $r){
	$result = $i * $r;
	return $result;
}

$i = 7;
$r = 3;

$volt = V($i,$r);
$arus = I($volt, $r);
$resist = R($volt, $i);

echo ("I = " . $arus . "\n");
echo ("R = " . $resist . "\n");
echo ("V = " . $volt . "\n");
echo ("\n");

//--
//keliling lingkaran (2 phi r)
function kll($r) {
	$phi = 3.14;
	return 2 * $phi * $r;
}
echo ("Keliling Lingkaran = " . kll(7) . "\n");
echo ("\n");

//--
//luas lingkaran (phi r r)
define("phi", 3.14);
echo ("phi = " . phi . "\n");
function ll($r) {
        return phi * $r * $r;
}
echo ("Luas Lingkaran = " . ll(5) . "\n");
echo ("\n");

//--
//input nama
//output Hello Choppper
function greet($nama) {
	echo("Welcome $nama\n");
	echo("Greeting $nama\n");
	echo("Hello $nama\n");
}
greet("Chopper");
echo ("\n");

//--
function tegur($nama) {
        return "Welcome $nama\nGreeting $nama\nHello $nama\n";
}
echo sapa("Chopper");
echo ("\n");

//--
function sapa($nama) {
        return "Welcome $nama\nGreeting $nama\nHello $nama\n";
}
echo sapa("andi");
echo sapa("budi");
echo sapa("laras");
echo ("\n");

//--
$a = 10;
$b = 4;
//arithmetic operator
echo (($a % $b) . "\n");
echo (($a ** $b) . "\n");
//assigment operator
echo (($a += $b) . "\n"); //$a = $a + $b <- a = 15
echo (($a -= $b) . "\n"); //$a = $a - $b <- 15 = 15 - 5 <- 10
echo (($a *= $b) . "\n"); //$a = $a * $b <- 10 = 10 * 5 <- 50
echo (($a /= $b) . "\n"); //$a = $a / $b <- 50 = 50 / 5 <- 10
echo (($a %= $b) . "\n"); //$a = $a % $b <- 10 = 10 % 5 <- 0
//comparison operator
$p = 5;
$q = 5;
echo (($p == $q) . "\n"); //equal -> true/false
echo (($p === $q) . "\n");
echo (($p != $q) . "\n");
echo (($p <> $q) . "\n");
echo (($p !== $q) . "\n");
echo (($p > $q) . "\n");
echo (($p < $q) . "\n");
echo (($p >= $q) . "\n");
echo (($p <= $q) . "\n");
//increment/decrement operator
echo ((++$p) . "\n"); //($p = $p + 1) increment p dengan 1, kemudian return p
echo (($p++) . "\n"); //($p = $p + 1) return p, increment p dengan 1
echo (($p) . "\n"); //
echo ((--$p) . "\n"); //($p = $p + 1) increment p dengan 1, kemudian return p
echo (($p--) . "\n"); //($p = $p + 1) return p, decrement p dengan 1
echo (($p) . "\n"); //
//logical operator
$r = true; $s = true;
echo (($r and $s) . "\n"); //salah satunya false maka false (bisa pakai simbol &&)
echo (($r or $s) . "\n"); //salah satunya true maka true (bisa pakai simbol ||)
echo (($r xor $s) . "\n"); //jika salah satunya true maka true, tapi tidak dua duanya
echo ((!$p) . "\n"); //tidak p
//string operator
$t = "String 1";
$u = "String 2";
echo (($t . $u) . "\n"); //concatenation
$t .= $u;
echo ($t . "\n");
$t .= $u;
echo ($t . "\n");
$t .= $u;
echo ($t . "\n");
echo (strtolower($t) . "\n");
echo (strtoupper($u) . "\n");
echo (strlen($t) . "\n"); //return panjang (int) string
echo (strrev($t) . "\n"); //return reversed string t
echo (strpos($t, "2") . "\n");
echo (str_replace("String 2", "kata", $t) . "\n");


//Latihan
//1. buatlah function untuk menggantikan spasi menjadi separator
//contoh : input  : Xsis Academy
//	   output : Xsis;Academy
function string($str){
        return (str_replace(" ", ";", $str));
}
$str = "Selamat datang di Xsis Academy";
echo ($str . "\n");
echo string($str . "\n");

//2. buatlah function untuk menukar 3 karakter depan ke belakang dan 3 karakter belakang kedepan
//	 : input  : academy
//	   output : emydaca


function swapchar($string){
	$length = strlen($string);

	$front = substr($string, 0, 3);
	$middle = substr($string, 3, $length -6);
	$end = substr($string, -3);

	return $end . $middle . $front;
}
$hasil = swapChar("academy");
echo $hasil . "\n"; //

$hasil = swapChar("beruang");
echo $hasil . "\n"; //
?>
