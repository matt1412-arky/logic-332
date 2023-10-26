<?php
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
===============================================
Nomor 2:
extraFront("Hello") → "HeHeHe"
extraFront("ab") → "ababab"
extraFront("H") → "HHH"
===============================================
Nomor 3:
repeatEnd("Hello", 3) → "llollollo"
repeatEnd("Hello", 2) → "lolo"
repeatEnd("Hello", 1) → "o"
===============================================
Nomor 4:
lihat di index 0 dan 2 cari yang terbesar
maxEnd3([1, 2, 3]) → [3, 3, 3]
maxEnd3([11, 5, 9]) → [11, 11, 11]
maxEnd3([2, 11, 3]) → [3, 3, 3]
==============================================
Nomor 5:
Constraint : panjang array ganjil > 1
cari nilai tertinggi dari array tersebut
maxTriple([1, 2, 3]) → 3
maxTriple([1, 5, 3]) → 5
maxTriple([5, 2, 3]) → 5
================================================
Nomor 6:
swapEnds([1, 2, 3, 4]) → [4, 2, 3, 1]
swapEnds([1, 2, 3]) → [3, 2, 1]
swapEnds([8, 6, 7, 9, 5]) → [5, 6, 7, 9, 8]
================================================
Nomor 7:
Buat program (fungsi - bukan procedure) untuk mengecek suatu kata/kalimat termasuk palindrom atau bukan palindrom
================================================
Nomor 8:
Buat program untuk mengecek suatu kalimat ada berapa huruf vokal dan berapa huruf konsonan
input: "Xsis Academy"
output: 4 huruf vokal - aaei
        7 huruf konsonan - cdmssxy
*/

echo "Nomor 1: \n";
echo "A. ";
// makeOutWord("<<>>", "Yay") → "<<Yay>>"
function makeOutWord($tag, $word)
{
    // Mengambil dua karakter pertama dari tag
    $firstPart = substr($tag, 0, 2);
    // Mengambil dua karakter terakhir dari tag
    $lastPart = substr($tag, -2);
    // Menggabungkan dua bagian dengan kata di antaranya
    $result = $firstPart . $word . $lastPart;
    return $result;
}

// Pemanggilan fungsi
$result = makeOutWord("<<>>", "Yay");
echo $result; // Output: "<<Yay>>"
echo "\n";

echo "B. ";
// makeOutWord("<<>>", "WooHoo") → "<<WooHoo>>"
$result = makeOutWord("<<>>", "WooHoo");
echo $result; // Output: "<<WooHoo>>"
echo "\n";

echo "C. ";
// makeOutWord("[[]]", "word") → "[[word]]"
$result = makeOutWord("[[]]", "word");
echo $result; // Output: "[[word]]"
echo "\n";

echo "Nomor 2: \n";
// extraFront("Hello") → "HeHeHe"
echo "A. ";
function extraFront($word)
{
    $front = substr($word, 0, 2);
    $result = str_repeat($front, 3);
    return $result;
}
$output = extraFront("Hello");
echo $output;
echo "\n";

echo "B. ";
// extraFront("ab") → "ababab"
$output = extraFront("ab");
echo $output;
echo "\n";

echo "C. ";
// extraFront("H") → "HHH"
$output = extraFront("H");
echo $output;
echo "\n";

echo "Nomor 3: \n";
function repeatEnd($word, $times)
{
    $last = substr($word, -$times); // Mengambil sejumlah karakter terakhir sesuai dengan $times
    $result = str_repeat($last, $times);
    return $result;
}

// Mengeksekusi repeatEnd untuk output yang diinginkan
$word = "Hello";

$resultA = repeatEnd($word, 3);
$resultB = repeatEnd($word, 2);
$resultC = repeatEnd($word, 1);

echo "A. " . $resultA . "\n";
echo "B. " . $resultB . "\n";
echo "C. " . $resultC . "\n";

echo "Nomor 4: \n";

function maxEnd3($nums)
{
    // Temukan nilai maksimum antara elemen pertama dan terakhir dalam array
    $maxValue = max($nums[0], $nums[count($nums) - 1]);

    // Isi seluruh array dengan nilai maksimum
    for ($i = 0; $i < count($nums); $i++) {
        $nums[$i] = $maxValue;
    }

    return $nums;
}

// Pemanggilan fungsi
$array1 = [1, 2, 3];
$array2 = [11, 5, 9];
$array3 = [2, 11, 3];

$output1 = maxEnd3($array1);
$output2 = maxEnd3($array2);
$output3 = maxEnd3($array3);

echo "A. " . "[" . implode(", ", $output1) . "]" . "\n"; // Output: "[3, 3, 3]"
echo "B. " . "[" . implode(", ", $output2) . "]" . "\n"; // Output: "[11, 11, 11]"
echo "C. " . "[" . implode(", ", $output3) . "]" . "\n"; // Output: "[3, 3, 3]"

echo "Nomor 5: \n";
function maxTriple($nums)
{
    $length = count($nums);

    if ($length % 2 == 0) {
        // Panjang array harus ganjil, sehingga kode hanya berlaku jika panjang array ganjil
        return "Panjang array tidak ganjil";
    }

    // Temukan nilai tertinggi dari elemen pertama, tengah, dan terakhir dalam array
    $middleIndex = ($length - 1) / 2;
    $maxValue = max($nums[0], $nums[$middleIndex], $nums[$length - 1]);

    return $maxValue;
}

// Pemanggilan fungsi
$array1 = [1, 2, 3];
$array2 = [1, 5, 3];
$array3 = [5, 2, 3];
$array4 = [1, 2, 3, 5];

$output1 = maxTriple($array1);
$output2 = maxTriple($array2);
$output3 = maxTriple($array3);
$output4 = maxTriple($array4);

echo "A. " . $output1 . "\n"; // Output: "Nilai tertinggi array pertama: 3"
echo "B. " . $output2 . "\n";   // Output: "Nilai tertinggi array kedua: 5"
echo "C. " . $output3 . "\n"; // Output: "Nilai tertinggi array ketiga: 5"
echo "D. " . $output4 . "\n"; // Output: "Panjang array tidak ganjil"

echo "Nomor 6: \n";

function swapEnds($arr)
{
    $length = count($arr);
    if ($length < 2) {
        return $arr; // Jika panjang array kurang dari 2, tidak ada yang perlu ditukar.
    }

    $temp = $arr[0];
    $arr[0] = $arr[$length - 1];
    $arr[$length - 1] = $temp;

    return $arr;
}

// Penggunaan fungsi swapEnds
$arr1 = [1, 2, 3, 4];
$arr2 = [1, 2, 3];
$arr3 = [8, 6, 7, 9, 5];
$arr4 = [11];

$result1 = swapEnds($arr1);
$result2 = swapEnds($arr2);
$result3 = swapEnds($arr3);
$result4 = swapEnds($arr4);

print_r($result1); // Output: [4, 2, 3, 1]
print_r($result2); // Output: [3, 2, 1]
print_r($result3); // Output: [5, 6, 7, 9, 8]
print_r($result4); // Output: [11]

echo implode(' ', $result1) . "\n"; // Output: 4 2 3 1
echo implode(' ', $result2) . "\n"; // Output: 3 2 1
echo implode(' ', $result3) . "\n"; // Output: 5 6 7 9 8
echo implode(' ', $result4) . "\n"; // Output: 11

echo "Nomor 7: \n";
// Buat program (fungsi - bukan procedure) untuk mengecek suatu kata/kalimat termasuk palindrom atau bukan palindrom
function isPalindrome($word)
{
    // Menghapus spasi dan mengubah semua karakter menjadi huruf kecil
    // $word = strtolower(str_replace(' ', '', $word));
    $word = strtolower($word);

    // Mengecek apakah kata/kalimat merupakan palindrom
    if ($word == strrev($word)) {
        return true;
    } else {
        return false;
    }
}

// Contoh penggunaan fungsi isPalindrome
$word1 = "katak";
$word2 = "malam";
$word3 = "Kasur ini rusak";
$word4 = "Hello World";

$result1 = isPalindrome($word1);
$result2 = isPalindrome($word2);
$result3 = isPalindrome($word3);
$result4 = isPalindrome($word4);

echo "$word1: " . ($result1 ? "Palindrom" : "Bukan Palindrom") . "\n"; // Output: katak: Palindrom
echo "$word2: " . ($result2 ? "Palindrom" : "Bukan Palindrom") . "\n"; // Output: malam: Palindrom
echo "$word3: " . ($result3 ? "Palindrom" : "Bukan Palindrom") . "\n"; // Output: Kasur ini rusak: Palindrom
echo "$word4: " . ($result4 ? "Palindrom" : "Bukan Palindrom") . "\n"; // Output: Hello World: Bukan Palindrom

echo "Nomor 8: \n";
// Buat program untuk mengecek suatu kalimat ada berapa huruf vokal dan berapa huruf konsonan
// input: "Xsis Academy"
// output: 4 huruf vokal - aaei
//         7 huruf konsonan - cdmssxy

// Fungsi untuk menghitung jumlah huruf vokal dan huruf konsonan dalam sebuah string
function hitungHurufVokalDanKonsonan($kalimat)
{
    $kalimat = strtolower(str_replace(' ', '', $kalimat)); // Konversi kalimat ke huruf kecil
    $kalimatArray = str_split($kalimat); // Pisahkan kalimat menjadi array karakter
    sort($kalimatArray); // Urutkan karakter dalam array
    // $kalimat = implode('', $kalimatArray); // Gabungkan kembali array menjadi kalimat

    $vokal = "aeiou";
    // $konsonan = "bcdfghjklmnpqrstvwxyz";
    $jumlahVokal = 0;
    $jumlahKonsonan = 0;
    $hurufVokal = "";
    $hurufKonsonan = "";

    for ($i = 0; $i < count($kalimatArray); $i++) {
        $huruf = $kalimatArray[$i];
        if (strpos($vokal, $huruf) !== false) {
            $jumlahVokal++;
            $hurufVokal .= $huruf;
        } else {
            // } elseif (strpos($konsonan, $huruf) !== false) {
            $jumlahKonsonan++;
            $hurufKonsonan .= $huruf;
        }
    }

    return [
        "vowels" => $jumlahVokal,
        "consonants" => $jumlahKonsonan,
        "vowelLetters" => $hurufVokal,
        "consonantLetters" => $hurufKonsonan
    ];
}
$kalimat = readline("Masukkan kalimat: ");
$result = hitungHurufVokalDanKonsonan($kalimat);

echo $result['vowels'] . " huruf vokal - " . $result['vowelLetters'] . "\n";
echo $result['consonants'] . " huruf konsonan - " . $result['consonantLetters'] . "\n";
