<?php

function f($x)
{
    return 3 * $x;
}

echo (f(3) . "<br>");

$x = 9;
echo (f($x) . "<br>");
echo (f(9) . "<br>");

$y = 100;
echo (f($y) . "<br>");
echo (f($y + $x) . "<br>");

$z = f($y);
echo ($z . "<br>");

$out = f(5) * 7; //hasilnya akan 15 * 7
echo ($out . "<br>");

$hasil = f(5) + f($x); //hasilnya akan 15 + 27
echo ($hasil . "<br>");

function E($m, $c)
{
    $result = $m * $c * $c;
    return $result;
}

$einstein = E(3, 5);
echo ($einstein . "<br>"); //hasilnya akan 3 * 5 * 5

$x = $einstein + $out;
echo ($x . "<br>");

/*
//latihan sendiri operasi penambahan
function tambah($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return $hasil;
}

$hasil_tambah = tambah(5, 3); // Hasilnya akan 8
echo("Hasil penjumlahan = " . $hasil_tambah . "<br>");
*/

/*
// Latihan
//function menghitung volt
function v($x, $y) {
    $volt = $x * $y;
    return $volt;
}

$volt = v(3, 5);
echo("Volt = " . $volt . "<br>");

//function menghitung arus
function I($x, $y) {
    $I = $x / $y;
    return $I;
}

$arus = I(15, 5);
echo("Arus = " . $arus . "<br>");

//function menghitung resisten
function R($x, $y) {
    $R = $x / $y;
    return $R;
}

$resisten = R(15, 3);
echo("Resisten = " . $resisten . "<br>");
//////////////////////////////////////
*/

function V($I, $R)
{
    return $I * $R;
}

function I($V, $R)
{
    return $V / $R;
}

function R($V, $I)
{
    return $V / $I;
}

$I = 5;
$R = 2;

$volt = V($I, $R);
$arus = I($volt, $R); // $arus = I(V($I, $R), $R);
$resist = R($volt, $arus);

echo ("Voltage ; " . $volt . "<br>");
echo ("Current ; " . $arus . "<br>");
echo ("Resistance ; " . $resist . "<br>");

// Keliling Lingkaran
function kelilingLingkaran($r)
{
    $pi = 3.14;
    return 2 * $pi * $r;
}

echo ("Keliling Lingkaran = " . kelilingLingkaran(7) . "<br>");

// Luas Lingkaran
define("pi", 3.14);

function luasLingkaran($r)
{
    return pi * $r * $r;
}

echo ("Luas Lingkaran = " . luasLingkaran(5) . "<br>");

// input nama
// output Hello bowo
// ini prosedur bukan function karena function harus memiliki 1 nilai return
function greet($nama)
{
    echo ("Welcome $nama <br>");
    echo ("Greeting $nama <br>");
    echo ("Hello $nama <br>");
}

greet("bowo");
greet("Peter");

function sapa($nama)
{
    return "Welcome $nama <br>Greeting $nama <br>Hello $nama <br>";
}

echo (sapa("Bowo"));
echo (sapa("Matthew"));
echo (sapa("Vina"));

// Belajar Mandiri
// Cek Ganjil/Genap
function cekGanjilGenap($angka)
{
    if ($angka % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

echo ("Angka Ganjil/Genap : " . cekGanjilGenap(78) . "<br>");

// Menghitung panjang str
function greeting($nama)
{
    return "Welcome $nama <br>Greeting $nama <br>Hello $nama <br>";
}

function panjangString($string)
{
    return strlen($string);
}

$teks = panjangString(greeting("Matthew"));
echo ("Panjang String : " . $teks . "<br>");

/*
// Function Sorting
function sortArray($array) {
    sort($array);
    return $array;
}

$angka = array(4, 2, 8, 6, 3);
$hasil_sort = sortArray($angka); // $hasil_sort akan menjadi array(2, 3, 4, 6, 8)

echo("Hasil Sorting ; " . implode(", ", $hasil_sort) . "<br>");
*/

// Menghitung Luas Persegi Panjang
function luasPersegiPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}

echo ("Luas Persegi Panjang : " . luasPersegiPanjang(2, 5) . "<br>");

// Menghitung Luas Segitiga
function luasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

print("Luas Segitiga ; " . luasSegitiga(3, 6) . "<br>");

// Menghitung Luas dan Keliling Jajar Genjang
function hitungLuasJajarGenjang($alas, $tinggi)
{
    return $alas * $tinggi;
}

function hitungKelilingJajarGenjang($a, $b)
{
    return 2 * ($a + $b);
}

echo ("Luas Jajar Genjang ; " . hitungLuasJajarGenjang(3, 5) . "<br>");
echo ("Keliling Jajar Genjang ; " . hitungKelilingJajarGenjang(3, 5) . "<br>");

// Menghitung Luas dan Keliling Layang-layang
function hitungLuasLayangLayang($d1, $d2)
{
    return 0.5 * ($d1 * $d2);
}

function hitungKelilingLayangLayang($sisi1, $sisi2)
{
    return 2 * ($sisi1 + $sisi2);
}

echo ("Luas layang-layang : " . hitungLuasLayangLayang(5, 10) . "<br>");
echo ("Keliling layang-layang : " . hitungKelilingLayangLayang(5, 10) . "<br>");

$a = 10;
$b = 5;
//aritmehmetic operator
echo ("Modulus ; " . $a % $b . "<br>"); //sisa bagi
echo ("Pangkat ; " . $a ** $b . "<br>");
//assignment operator
echo (($a += $b) . "<br>"); //$a = $a + $b <- a = 15
echo (($a -= $b) . "<br>"); //$a = $a - $b <- a = 10
echo (($a *= $b) . "<br>"); //$a = $a * $b <- a = 50
echo (($a /= $b) . "<br>"); //$a = $a / $b <- a = 10
echo (($a %= $b) . "<br>"); //$a = $a % $b <- a = 0
//comparison operator
$p = 5;
$q = 3;

echo (($p == $q) . "<br>"); //equal -> true/false
echo (($p === $q) . "<br>"); //return true jika p=q dengan tipe data yang sama
echo (($p != $q) . "<br>"); //not equal -> true/false
echo (($p <> $q) . "<br>"); //not equal -> trus/false
echo (($p !== $q) . "<br>"); /* return true jika p tidak sama dengan q, atau
			 tipe datanya tidak sama*/
echo (($p > $q) . "<br>"); //p lebih besar dari q
echo (($p < $q) . "<br>"); //p lebih kecil dari q
echo (($p >= $q) . "<br>"); //p lebih besar atau sama dengan q
echo (($p <= $q) . "<br>"); //p lebih kecil atau sama dengan q

//increment/decrement operator
echo ((++$p) . "<br>"); //($p = $p + 1)increment p dengan 1, kemudian return p
echo (($p++) . "<br>"); //($p = $p + 1)increment p dengan 1, kemudian return p
echo (($p) . "<br>"); //
echo ((--$p) . "<br>"); //($p = $p - 1)increment p dengan 1, kemudian return p
echo (($p--) . "<br>"); //($p = $p - 1)increment p dengan 1, kemudian return p
echo (($p) . "<br>"); //

//Logical operator
$r = true;
$s = true;
echo (($r and $s) . "<br>"); // hasilnya true (simbol &&)
echo (($r and $s) . "<br>"); /* hasilnya false apabila salah satunya false
			  (simbol ||)*/
echo (($r or $s) . "<br>"); // hasilnya true apabila salah satunya true
echo (($r xor $s) . "<br>"); /* hasilnya true apabila salah satunya false,
			  apabila kedua nya true maka hasilnya false*/
echo ((!$p) . "<br>"); //tidak p

//String operator
$t = "Hello";
$u = "World";

echo (($t . " " . $u) . "<br>"); //concatenation/penggabungan string

$t .= $u;
echo ($t  . "<br>");

$t .= $u;
echo ($t . "<br>");

$t .= $u;
echo ($t . "<br>");
echo (strtolower($t) . "<br>");
echo (strtoupper($u) . "<br>");
echo (strlen($t) . "<br>"); // return panjang(int) string
echo (strrev($t) . "<br>"); // return reversed string t
echo (strpos($t, "e") . "<br>");
echo (strpos($t, $u) . "<br>");
echo (str_replace("World", "Matthew", $t) . "<br>");

$str = "Xsis Academy Batch 332 PHP";
echo (substr($str, 0, 4) . "<br>");
echo (substr($str, 5, 7) . "<br>");

// Latihan
// 1. Buatlah function untuk mengganti spasi menjadi seperator
/* contoh : input : Xsis Academy
            output : Xsis;Academy
*/
// 1.
function gantiSpasi($string)
{
    return str_replace(" ", "-", $string);
}
$hasil = gantiSpasi("Hello World");
echo ($hasil . "<br>");

// 2. Buatlah function untuk menukar 3 karakter depan kebelakang dan 3 karakter belakang kedepan
/* contoh : input : academy
            output : emydaca
            input : beruang, output : anguber   
*/
// 2. 
function swapCharacters($string)
{
    $length = strlen($string);

    $front = substr($string, 0, 3);
    $middle = substr($string, 3, $length - 6);
    $end = substr($string, -3);

    return $end . $middle . $front;
}

$hasil = swapCharacters("academy");
echo $hasil . "<br>"; // Output: emydaca

$hasil = swapCharacters("beruang");
echo $hasil . "<br>"; // Output: anguber
