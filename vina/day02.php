<?php 

// f berfungnsi untuk fungsi
function f($x) {
	return 3*$x;
}

echo(f(7) . "\n");

$x = 9; //berfungsi secara global
echo(f($x) . "\n");

$y = 100; 
echo(f($y) . "\n");
echo(f($y + $x) . "\n");

$z = f($y);
echo($z . "\n");

$out = f(5) * 7; //hasilnya 15 * 7 
echo($out . "\n");

$hasil = f(5) + f($x); // hasilnya adalah 15 + 27
echo($hasil . "\n");


//contoh fungsi lain

function E($m, $c) {
	$result = $m * $c * $c;
	return $result;

}

$einstein = E(3, 5);
echo($einstein . "\n");

$x = $einstein + $out;
echo($x . "\n");

function Volt($i , $r) {
	$resultV = $i * $r;
	return $resultV;
}

function Arus($v , $r) {     
        $resultI = $v / $r;
        return $resultI;
}

function Hambatan($v , $i) {     
        $resultR = $v / $i;
        return $resultR;
}

//menambahkan variabel

$v = 10;
$i = 5;
$r = 2;

$resultV = Volt($i , $r);
$resultI = Arus($v , $r);
$resultR = Hambatan($v , $i);

echo($resultV . "\n");
echo($resultI . "\n");
echo($resultR . "\n");

//pembuktian rumus hukum ohm

$ResultV = Volt($i,$r);
$ResultI = Arus($ResultV,$r); 

// atau dapat ditulis sebagai $ResultI = Arus(Volt($i,$r),$r)

$ResultR = Hambatan($ResultV ,$i);

//keliling lingkaran 2 pi r 
//=================

function kll($r) {
	$pi = 3.14; // penting!! untuk nilai yg konstan jgn dibuat sebagai parameter 
	return 2 * $pi *$r;
}

echo(kll(7) . "\n");

// luas lingkaran 
//==========


define("pi" , 3.14); //bersifat global  //belajar fungsi define 

echo(pi . "\n");


function luas($r) {
	return pi * $r * $r;
}
 
echo(luas(5) . "\n");

// contoh sebuah fungsi string 
//input nama 
//output Hello vina 

// function dibawah ini disebut prosedur karena tidak ada return

function greet($nama){
	echo ("Hello $nama");
	echo(" nihao $nama");
	echo("holla $nama"); 
}

 //kenapa tidak ada return?? karena bisa dapat menghasilkan banyak output

greet("vina\n"); //kenapa disini tidak ada function echo?? 


//function string hasilnya pasti string
//note!! semua yang mempunyai pemograman function mempunyai satu return value

//atau dapat ditulis sebagai function 

function sapa($nama){
	return "Welcome $nama\nGreeting $nama\nHello $nama\n";
}

echo(sapa("a"));
echo(sapa("b"));
echo(sapa("c"));


//function dan prosedur adalah sub program yang dapat dipanggil berulang-ulang

$a = 10;
$b = 2;

//aritmatika
echo($a % $b . "\n");
echo($a ** $b . "\n");

//assigment operator
//===========
//echo (($a += $b) . "\n"); //$a = $a + $b
//echo (($a -= $b) . "\n"); //$a = $a - $b     a = 15
//echo (($a *= $b) . "\n"); //$a = $a * $b  a = 10
//echo (($a /= $b) . "\n"); //$a = $a / $b	a = 50
//echo (($a %= $b) . "\n"); //$a = $a % $b 	a = 10

//comparison operator
//==============
$p = 5;
$q = 3;

//echo(($p == $q) . "\n"); //equal -> true/false apakah nilainya sama?
//echo(($p === $q) . "\n"); //return true jika p=q dengan tipe data yang sama
//echo(($p != $q) . "\n"); //not equal
//echo(($p <> $q) . "\n"); //not equal
//echo(($p !== $q) . "\n"); // return true jika p tidak sama dengan q atau tipenya tidak sama
//echo(($p > $q) . "\n"); // p lebih besar dari q
//echo(($p < $q) . "\n"); // p lebih kecil dari q
//echo(($p >= $q) . "\n"); //p lebih besar atau sama dengan q
//echo(($p <= $q) . "\n"); //p lebih kecil atau sama dengan q

// increment/decrement operators 
//===============

//echo((++$p) . "\n"); //($p = $p + 1) increment p dengan 1, kemudian return p
//echo(($p++) . "\n"); // ($p = $p + 1) return p, increment p dengan 1
//echo((--$p) . "\n"); // ($p = $p - 1) decrement p dengan 1, kemudian return p
//echo(($p--) . "\n"); // ($p = $p - 1) return p, decrement p dengan 1


//logical operator 
//==============

$r = true; $s = true
//echo(($r and $s) . "\n"); //salah satunya false maka false (bisa pakai simbol &&)
//echo(($r or $s) . "\n"); //salah satunya true maka true (bisa menggunakan simbol ||)
//echo(($r xor $s) . "\n"); //jika salah satunya true maka true, tapi tidak keduanya
//echo((!$s) . "\n"); //tidak s

// string operators 
//=============

//$t = "string 1";
//$u = "string 2";
//echo(($t . $u) . "\n"); //concatenation

// concatenation assigment 
//$t .= $u ;
//echo($t . "\n"); //hasilnya string1 string 2
//kalau ditambahin perintah concatenation assigment lagi 
//$t .= $u ;
//echo($t . "\n"); //hasilnya outputnya string1 string 2 string 2
//$t .= $u ;
//echo($t . "\n"); //hasilnya outputnya string1 string 2 string2 string 2

//echo(strtolower($t) . "\n"); //mengubah menjadi huruf kecil
//echo(strtoupper($t) . "\n"); //mengubah menjadi huruf besar
//echo(strlen($t) . "\n"); // return panjang (int) string
//echo(strrev($t) . "\n"); // return reversed string t; membalikan string
//echo(strpos($t, "2") . "\n"); //melewati berapa angka untuk menemukan string "2"
//echo(str_replace("String 2", "kata", $t) . "\n"); //mengganti kalimat string 2 menjadi kata
/*
function SS($input, $separator = ';'){
	$input = str_replace(' ', $separator, $input);
	return $input
}

$input = SS("Xsis Academy");
echo($input . "\n");
*/
?>
