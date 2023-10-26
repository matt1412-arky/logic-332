<?php
for ($i = 1; $i <= 3; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= 3; $j++) { // loop sampai selesai
        echo $i . $j . " ";
    }
    echo "\n";
}
echo "\n";

$temp = 1;
for ($i = 1; $i <= 3; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= 3; $j++) { // loop sampai selesai
        echo $temp . " ";
        $temp++;
    }
    echo "\n";
}
echo "\n";

$temp = 9;
for ($i = 1; $i <= 3; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= 3; $j++) { // loop sampai selesai
        echo $temp . " ";
        $temp--;
    }
    echo "\n";
}
echo "\n";

/*
Output:
000
0x0
000
*/

for ($i = 1; $i <= 3; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= 3; $j++) { // loop sampai selesai
        if ($i == 2 && $j == 2) {
            echo "x";
        } else {
            echo "0";
        }
    }
    echo "\n";
}
echo "\n";

for ($i = 1; $i <= 3; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= 3; $j++) { // loop sampai selesai
        if ($i == $j) {
            echo "X";
        } elseif ($i < $j) {
            echo "Y";
        } else {
            echo "Z";
        }
    }
    echo "\n";
}
echo "\n";

for ($i = 1; $i <= 5; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= 5; $j++) { // loop sampai selesai
        if ($i == $j) {
            echo "X";
        } elseif ($i < $j) {
            echo "Y";
        } else {
            echo "Z";
        }
    }
    echo "\n";
}
echo "\n";

$n = 3;
for ($i = 1; $i <= $n; $i++) { // loop terlebih dahulu
    for ($j = 1; $j <= $n; $j++) { // loop sampai selesai
        if ($i + $j == $n + 1) {
            echo "*";
        } elseif ($i == $j) {
            echo "X";
        } elseif ($i < $j) {
            echo "Y";
        } elseif ($i > $j) {
            echo "Z";
        }
    }
    echo "\n";
}
echo "\n";

// Tugas
// 1. Buatlah matrix dinamis dengan isi bilangan ganjil dari 15 - n

echo "Jawaban 1 : \n";
// Cara 1
echo "Cara 1 : \n";
$n = 3; // Ganti n sesuai dengan kebutuhan
$num = 15;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        echo $num . " ";
        $num += 2;
    }
    echo "\n";
}
echo "\n";

// Cara 2
echo "Cara 2 : \n";
$n = 3; // Ganti n sesuai dengan kebutuhan
$num = 15;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $num . " ";
        $num += 2;
    }
    echo "\n";
}
echo "\n";

/* cek matrix dasar tanpa dimasukkan num nya
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        // $num = 15 + ($i * $n) + $j * 2;
        // echo $num . " ";
        echo $i . $j . " ";
    }
    echo "\n";
}
echo "\n";
*/

/* 2. 1 3 5
      2 4 6
      7 9 11
*/
echo "Jawaban 2 : \n";

$n = 3; // Ukuran matriks (3x3)
$ganjil = 1; // Bilangan ganjil
$genap = 2; // Bilangan genap

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == 1) {
            echo $genap . " ";
            $genap += 2; // Melompat dua angka untuk mendapatkan bilangan genap berikutnya
        } else {
            echo $ganjil . " ";
            $ganjil += 2;
        }
    }
    echo "\n";
}
echo "\n";
/*
output :
A A A A A
D       B
D       B
D       B
C C C C C
*/
echo "Jawaban 3 : \n";
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i == 1) {
            echo "A ";
        } elseif ($i == $n) {
            echo "C ";
        } elseif ($j == 1) {
            echo "D ";
        } elseif ($j == $n) {
            echo "B ";
        } else {
            echo "  "; // Spasi untuk area tengah
        }
    }
    echo "\n";
}
echo "\n";

// Times table matrix 12x12
echo "Jawaban 4 : \n";
echo "Cara 1 : \n";
$n = 12;

// Header baris pertama
echo str_pad("X", 4);
for ($i = 1; $i <= $n; $i++) {
    echo str_pad($i, 4);
}
echo "\n";

// Baris dan kolom sisanya
for ($i = 1; $i <= $n; $i++) {
    echo str_pad($i, 4); // Header kolom pertama
    for ($j = 1; $j <= $n; $j++) {
        $result = $i * $j;
        echo str_pad($result, 4); // Hasil perkalian
    }
    echo "\n";
}
echo "\n";

echo "Cara 2 : \n";
$n = 12;

for ($i = 0; $i <= $n; $i++) {
    for ($j = 0; $j <= $n; $j++) {
        if ($i == 0) {
            echo str_pad($j == 0 ? "X" : $j, 4);
        } elseif ($j == 0) {
            echo str_pad($i, 4);
        } else {
            echo str_pad($i * $j, 4);
        }
    }
    echo "\n";
}
echo "\n";
