<?php
// 1. Output 1 3 5 7 9 11 13
for ($n = 1; $n <= 15; $n += 2) {
    echo ("$n ");
}
echo "\n";

// 2. Output 1 4 7 10 13 16 19
for ($n = 1; $n <= 20; $n += 3) {
    echo ("$n ");
}
echo "\n";

// 3. Output 1 5 9 13 17 21 25
for ($n = 1; $n <= 25; $n += 4) {
    echo ("$n ");
}
echo "\n";

// 4. Output 1 5 * 9 13 * 17 
$x = 1;
for ($i = 1; $i <= 5; $i++) {
    echo $x;
    $x += 4;
    if ($i % 2 == 0) {
        echo " * ";
    } else {
        echo " ";
    }
}
echo "\n";

// 5. Output 1 5 * 13 17 * 25 
$x = 1;
for ($i = 1; $i <= 7; $i++) {
    if ($i % 3 == 0) {
        echo " * ";
    } else {
        echo "$x ";
    }
    $x += 4;
}
echo "\n";

// 6. Output 3 9 27 81 243 729 2187 
$number = 3;
for ($i = 1; $i <= 7; $i++) {
    echo $number;
    if ($i < 7) {
        echo ' ';
    }
    $number *= 3;
}
echo "\n";

// 7. Output 4 16 * 64 256 * 1024
$x = 4;
for ($i = 1; $i <= 5; $i++) {
    echo "$x ";
    if ($i % 2 == 0) {
        echo " * ";
    }
    $x *= 4;
}
echo "\n";

// 8. Output 3 9 27  xxx 243 729 2187
$x = 3;
for ($i = 1; $i <= 7; $i++) {
    if ($i % 4 == 0) {
        echo " xxx ";
    } else {
        echo "$x ";
    }
    $x *= 3;
}
echo "\n";
