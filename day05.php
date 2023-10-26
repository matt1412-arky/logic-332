<?php
$n = 3;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i + $j == $n + 1) {
            echo ("*" . " ");
        } elseif ($i + $j <= $n + 1) {
            echo ("Y" . " ");
        } else {
            echo ("Z" . " ");
        }
    }
    echo ("\n");
}

// tugas 
// 1 Buatlah matrix dinamis dengan isi bilangan ganjil dari 15 - 30
$n = 3;
$bilanganGanjil = 15;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $bilanganGanjil . " ";
        $bilanganGanjil += 2;
    }
    echo ("\n");
}

$n = 3;
$genap = 2;
$ganjil = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i % 2 == 0) {
            echo "$genap ";
            $genap += 2;
        } else {
            echo "$ganjil ";
            $ganjil += 2;
        }
    }
    echo "\n";
}

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i == 1) {
            echo "A ";
        } elseif ($i == $n) {
            echo "C ";
        } elseif ($j == $n && $j >= $i) {
            echo "B ";
        } elseif ($j == 1 && $j <= $i) {
            echo "D ";
        } else {
            echo "  ";
        }
    }
    echo "\n";
}

$n = 12;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        $result = $i * $j;
        echo str_pad($result, 4, ' ', STR_PAD_BOTH);
    }
    echo ("\n");
}
