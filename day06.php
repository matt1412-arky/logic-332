<?php
// While melakukan looping sambil mengecek kondisi 
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "\n";
// Do while lakukan loop terlebih dahulu setelah itu cek kondisi
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
echo "\n";

// $input = readline("Masukkan data : ");
// echo $input . "\n";

// $key = "";
// while ($key != "x") {
//     $key = readline("Your key : ");
//     echo $key . "\n";
// }
// echo "Exit \n";

/*
$menu = "";
while ($menu != "5") {
    echo "1. Nasi Goreng \n";
    echo "2. Nasi Uduk \n";
    echo "3. Nasi Kuning \n";
    echo "4. Nasi Campur \n";
    echo "5. Keluar \n";
    $menu = readline("Pilih Menu : ");

    $item = "";
    switch ($menu) {
        case "1":
            $item = "Nasi Goreng";
            break;
        case "2":
            $item = "Nasi Uduk";
            break;
        case "3":
            $item = "Nasi Kuning";
            break;
        case "4":
            $item = "Nasi Campur";
            break;
        case "5":
            $item = "keluar";
            break;
        default:
            $item = "tidak sesuai menu";
            break;
    }
    echo "Anda memilih $item \n";
}
echo "Selesai \n";
*/

// Membuat matrix
$i = 1;
while ($i <= 3) {
    $j = 1;
    while ($j <= 3) {
        echo $i . $j . " ";
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

// 1. Buatlah matrix dinamis dengan isi bilangan ganjil dari 15 - n menggunakan while
$n = 3; // replace with your desired value of n

$num = 15;
$i = 1;
while ($i <= $n) {
    $j = 1;
    while ($j <= $n) {
        echo $num . " ";
        $num += 2;
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

/*
----1
---2-
--3--
-4---
5----
*/
$n = 5;
$i = 1;

while ($i <= $n) {
    $j = 1;
    while ($j <= $n) {
        if ($i + $j == $n + 1) {
            echo $i . " ";
        } else {
            echo "- ";
        }
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

/* 
output:
2  5  8  3 11 14 17
3                 3
53               20
50               23
47               26
3                 3
44 41 38 3 35 32 29
*/

$n = 7;
$i = 1;
$num = 2;

while ($i <= $n) {
    $j = 1;
    while ($j <= $n) {
        echo $i . $j . " ";
        $j++;
    }
    echo "\n";
    $i++;
}
echo "\n";

// Using for
function sum_3($num, $n)
{
    for ($i = 1; $i <= (($n * 2) + ($n - 2 * 2)); $i++) {
        $num += 3;
    }
    return $num;
}

$n = 7;
$num = 2;
$mid = round($n / 2);
$max = sum_3($num, $n);
$padding = 4; // Lebar setiap elemen

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        $output = " ";
        if ($j == $mid && ($i == 1 || $i == $n) || $i == 2 && ($i > $j || $j == $n) || $i == $n - 1 && ($j == 1 || $i < $j)) {
            $output = "3";
        } elseif ($i <= $j && $i == 1 || $j == $n && $i < $j) {
            $output = strval($num);
            $num += 3;
        } elseif ($j == 1 && $i >= $j || $i == $n) {
            $output = strval($max);
            $max -= 3;
        }
        echo str_pad($output, $padding);
    }
    echo "\n";
}
echo "\n";

// Using While
$n = 7;
$num = 2;
$mid = round($n / 2);
$max = sum_3($num, $n);
$padding = 4; // Lebar setiap elemen

$i = 1;
while ($i <= $n) {
    $j = 1;
    while ($j <= $n) {
        $output = " ";
        if ($j == $mid && ($i == 1 || $i == $n) || $i == 2 && ($i > $j || $j == $n) || $i == $n - 1 && ($j == 1 || $i < $j)) {
            $output = "3";
        } elseif ($i <= $j && $i == 1 || $j == $n && $i < $j) {
            $output = strval($num);
            $num += 3;
        } elseif ($j == 1 && $i >= $j || $i == $n) {
            $output = strval($max);
            $max -= 3;
        }
        echo str_pad($output, $padding);
        $j++;
    }
    $i++;
    echo "\n";
}
echo "\n";
