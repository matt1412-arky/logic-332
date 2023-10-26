<?php
// while melakukan loop sambil cek komdisi
$x = 1;

while ($x <= 5) {
    echo "The number is: $x \n";
    $x++;
}
// do-while melakikan loop terlebih dahulu setelah itu cek sendiri

$i = 1;
do {
    echo ($i . " ");
    $i++;
} while ($i <= 5);
echo ("\n");

/*
$input = readLine("Masukkan Apakah anda mau memesan makanan(y/n) : ");
if ($input == "y" || $input == "Y") {
    echo "Menu yang tersedia : \n";
    echo "1. Nasi Goreng \n";
    echo "2. Mie Goreng \n";
    echo "3. Bakmie Goreng \n";

    $pilih = readline("Pilih angka pada menu yang dipilih : ");
    switch ($pilih) {
        case 1:
            echo "anda memilih nasi goreng";
            break;
        case 2:
            echo "anda memilih nasi goreng";
            break;
        case 3:
            echo "anda memilih nasi goreng";
            break;
        default:
            echo "anda tidak memilih apapun";
    }
} else {
    echo "Selamat Tinggal";
}
*/

$i = 1;
$x = 1;
$n = 5;
while ($i <= $n) {
    $j = 1;
    while ($j <= $n) {
        if ($i + $j == $n + 1) {
            echo "$x";
            $x++;
        } else {
            echo "-";
        }
        $j++;
    }

    $i++;
    echo "\n";
}

$n = 7;
$x = 2;
$y = 53;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ((($i == 1 || $i == $n) && $j == 4)) {
            echo str_pad("3", 3) . " ";
        } elseif (($i == 2 && ($j == 1 || $j == $n))) {
            echo str_pad("3", 3) . " ";
        } elseif (($i == 6 && ($j == 1 || $j == $n))) {
            echo str_pad("3", 3) . " ";
        } elseif ($i == 1) {
            echo str_pad($x, 3) . " ";
            $x += 3;
        } elseif ($j == $n && $j >= $i) {
            echo str_pad("$x", 3) . " ";
            $x += 3;
        } elseif ($j == 1 && $j <= $i) {
            echo str_pad($y, 3) . " ";
            $y -= 3;
        } elseif ($i == $n) {
            echo str_pad($y, 3) . " ";
            $y -= 3;
        } else {
            echo str_pad("", 3) . " ";
        }
    }
    echo "\n";
}

// array
