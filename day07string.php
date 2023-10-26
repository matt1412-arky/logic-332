<?php
/*
PHP String Function
 */

$kalimat = "Xsis Academy, Jalan Langsat III No 5";
$kata = "PHP";
//string explode = memisahkan string berdasarkan separator
$explode = explode(" ", $kalimat);
print_r($explode);
print($kalimat . "\n");
//print dengan format  printf()
printf("%s %s \n", $kalimat, $kata);
// crypt() function untuk membuat hash dari suatu string
$hash = crypt($kata, "salt");
echo ($hash . "\n");
// implode = menggabungkan kata2 dalam suatu array menjadi suatu string
$strArray = array("Red", "Green", "Blue");
echo (implode(" ", $strArray) . "\n");
//trim untuk membuang spasi dikanan atau dikiri suatu string
$str = "    Cibinong City   ";
echo ($str . " : " . ltrim($str) . "\n");
echo ($str . " : " . rtrim($str) . "\n");
echo ($str . " : " . trim($str) . "\n");
// str_split(string, banyaknya karakter(int). untuk memisahkan string menjadi 1 atau lebih karakter)
$strArray = str_split($kalimat, 5);
print_r($strArray);
// str_pad
echo (str_pad("hello", 15, "$$") . "\n");
//strpos
echo (strpos($kalimat, "5" . "\n"));
// number_format
echo (number_format(12000000, 2, ",", ",") . "\n");
// strrev
echo (strrev("Xsis Academy") . "\n");
// join
echo (join("*", $strArray) . "\n");
// strtolower
echo (strtolower($kalimat . "\n"));
// strtoupper
echo (strtoupper($kalimat . "\n"));
// ucfirst(string) - membuat uppercase untuk karakter pertama dalam suatu kalimat
echo (ucfirst("php batch 332 xsis academy" . "\n"));
// ucwords(string) - membuat uppercase untuk karakter pertama dalam suatu kata
echo (ucwords("php batch 332 xsis academy" . "\n"));
//md5 - hash string to md5 format
echo (md5("password123") . "\n");
//sha1 - hash string to SHA format
echo (sha1("password123") . "\n");
/*
------------------------------------------------------------
TUGAS
------------------------------------------------------------
Buatlah function-function seperti dibawah ini :
================================================
Nomor 1:
makeOutWord("<<>>", "Yay") → "<<Yay>>"
makeOutWord("<<>>", "WooHoo") → "<<WooHoo>>"
makeOutWord("[[]]", "word") → "[[word]]"
*/

function makeOutWord($tag, $word)
{
    return substr($tag, 0, 2) . $word . substr($tag, 2, 2);
}
echo makeOutWord("<<>>", "Yay");
echo "\n";
echo makeOutWord("<<>>", "WooHoo");
echo "\n";
echo makeOutWord("[[]]", "word");
echo "\n";
// ===============================================
// Nomor 2:
// extraFront("Hello") → "HeHeHe"
// extraFront("ab") → "ababab"
// extraFront("H") → "HHH"
function extraFront($str)
{
    $front = substr($str, 0, 2);
    return $front . $front . $front;
}
echo extraFront("Hello");
echo "\n";
echo extraFront("ab");
echo "\n";
echo extraFront("H");
echo "\n";

// ===============================================
// Nomor 3:
// repeatEnd("Hello", 3) → "llollollo"
// repeatEnd("Hello", 2) → "lolo"
// repeatEnd("Hello", 1) → "o"
function repeatEnd($str, $n)
{
    if ($n == 3 || $n == 2) {
        $end = substr($str, -2);
        $result = "";
        for ($i = 0; $i < $n; $i++) {
            $result .= $end;
        }
        return $result;
    } else {
        $end = substr($str, -1);
        $result = "";
        for ($i = 0; $i < $n; $i++) {
            $result .= $end;
        }
        return $result;
    }
}
echo repeatEnd("Hello", 3);
echo "\n";
echo repeatEnd("Hello", 2);
echo "\n";
echo repeatEnd("Hello", 1);
echo "\n";
// ===============================================
// Nomor 4:
// maxEnd3([1, 2, 3]) → [3, 3, 3]
// maxEnd3([11, 5, 9]) → [11, 11, 11]
// maxEnd3([2, 11, 3]) → [3, 3, 3]

function amax($array)
{
    $first = $array[0];
    $last = $array[count($array) - 1];
    $nilaimax = max($first, $last);

    for ($i = 0; $i < 3; $i++) {
        $result[] = $nilaimax;
    }

    return $result;
}

$numbers1 = [1, 2, 3];
$result = amax($numbers1);
print_r($result);
$numbers2 = [11, 5, 9];
$result = amax($numbers2);
print_r($result);
$numbers3 = [2, 11, 3];
$result = amax($numbers3);
print_r($result);



// ==============================================
// Nomor 5:
// maxTriple([1, 2, 3]) → 3
// maxTriple([1, 5, 3]) → 5
// maxTriple([5, 2, 3]) → 5

function maxTriple($array)
{
    if (count($array) <= 1 || count($array) % 2 == 0) {
        return "Panjang array harus ganjil dan lebih dari 1 elemen.";
    } else {
        $maxValue = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] > $maxValue) {
                $maxValue = $array[$i];
            }
        }
    }

    return $maxValue;
}

$numbers1 = [1, 2, 3];
$numbers2 = [1, 5, 3];
$numbers3 = [5, 2, 3];

$result1 = maxTriple($numbers1);
$result2 = maxTriple($numbers2);
$result3 = maxTriple($numbers3);

echo "maxTriple([1, 2, 3]) → $result1\n";
echo "maxTriple([1, 5, 3]) → $result2\n";
echo "maxTriple([5, 2, 3]) → $result3\n";


// ================================================
// Nomor 6:
// swapEnds([1, 2, 3, 4]) → [4, 2, 3, 1]
// swapEnds([1, 2, 3]) → [3, 2, 1]
// swapEnds([8, 6, 7, 9, 5]) → [5, 6, 7, 9, 8]
// ================================================
//
$x1 = [1, 2, 3, 4];
$x2 = [1, 2, 3];
$x3 = [8, 6, 7, 9, 5];
function swapEnds($arr)
{
    $a = [];
    $b = count($arr) - 1;
    $a = $arr;
    $a[0] = $arr[$b];
    $a[$b] = $arr[0];
    return print_r($a);
}
swapEnds($x1);
swapEnds($x2);
swapEnds($x3);

// nomor 7 Buatlah program (fungsi - bukan procedure) mengecek apakah kata/kalimat merupakan palindrom atau bukan palindrom
function is_palindrome($text)
{
    $text = strtolower(str_replace(' ', '', $text));
    return $text == strrev($text);
}

$kata_kalimat = ("Kasur Rusak");

if (is_palindrome($kata_kalimat)) {
    echo "Kata atau kalimat ini adalah palindrom.\n";
} else {
    echo "Kata atau kalimat ini bukan palindrom.\n";
}

// no 8 Buatlah program untuk mengecek suatu kalimat ada berapa huruf vokal dan berapa huruf konsonan Inputan : "Xsis Academy" Output : 4 Huruf lokal : aaei dan 7 huruf konsonan : cdmssxy
function hitungVokalKonsonan($kalimat)
{
    $kalimat = strtolower($kalimat);
    $kalimatArr = str_split($kalimat);
    sort($kalimatArr);
    $kalimat = implode("", $kalimatArr);
    $jumlah = strlen($kalimat);
    $vokal = "";
    $konsonan = "";
    $totalVokal = 0;
    $totalKonsonan = 0;

    for ($i = 0; $i < $jumlah; $i++) {
        $karakter = $kalimat[$i];
        if (strpos('aeiou', $karakter) !== false) {
            $vokal .= $karakter;
            $totalVokal++;
        } elseif (strpos('abcdefghijklmnopqrstuvwxyz', $karakter)) {
            $konsonan .= $karakter;
            $totalKonsonan++;
        }
    }
    // $vokalArr = str_split($vokal);
    // $konsonanArr = str_split($konsonan);
    // sort($vokalArr);
    // sort($konsonanArr);

    // $vokal = implode('', $vokalArr);
    // $konsonan = implode('', $konsonanArr);

    return "$totalVokal Huruf vokal: $vokal\n$totalKonsonan Huruf konsonan: $konsonan";
}

$kalimat = "Xsis Academy";
$hasil = hitungVokalKonsonan($kalimat);

echo "Inputan: \"$kalimat\"\n";
echo $hasil;
