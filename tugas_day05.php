<?php
/*
// Soal 1 
// output: 1 3 5 7 9 11 13 
for ($i = 1; $i <= 13; $i += 2) {
    echo $i . " ";
}
echo "\n";

// Soal 2 
// output: 1 4 7 10 13 16 19 
for ($i = 1; $i <= 19; $i += 3) {
    echo $i . " ";
}
echo "\n";

// Soal 3
// output: 1 5 9 13 17 21 25
for ($i = 1; $i <= 25; $i += 4) {
    echo $i . " ";
}
echo "\n";

// Soal 4
// output: 1 5 * 9 13 * 17
for ($i = 1; $i <= 17; $i += 4) {
    echo $i . " ";
    if ($i == 5 || $i == 13) {
        echo "* ";
    }
}
echo "\n";

// Soal 5
// output: 1 5 * 13 17 * 25
for ($i = 1; $i <= 25; $i += 4) {
    if ($i == 9 || $i == 21) {
        echo "* ";
    } else {
        echo $i . " ";
    }
}
echo "\n";

// Soal 6 
// output: 3 9 27 81 243 729 2187
for ($i = 1; $i <= 7; $i++) {
    $result = pow(3, $i);
    echo $result . " ";
}
echo "\n";

// Soal 7 
// output: 4 16 * 64 256 * 1024
for ($i = 1; $i <= 5; $i++) {
    $result = pow(4, $i);
    echo $result . " ";
    if ($i == 2 || $i == 4) {
        echo "* ";
    }
}
echo "\n";

// Soal 8 
// output: 3 9 27 xxx 243 729 2187
for ($i = 1; $i <= 7; $i++) {
    $result = pow(3, $i);
    if ($i == 4) {
        echo "xxx ";
    } else {
        echo $result . " ";
    }
}
echo "\n";
*/

// Jawaban alternatif
// Soal 1
// output: 1 3 5 7 9 11 13 
for ($i = 1; $i <= 13; $i += 2) {
    echo $i . " ";
}
echo "\n";

// Soal 2
// output: 1 4 7 10 13 16 19 
for ($i = 1; $i <= 19; $i += 3) {
    echo $i . " ";
}
echo "\n";

// Soal 3
// output: 1 5 9 13 17 21 25
for ($i = 1; $i <= 25; $i += 4) {
    echo $i . " ";
}
echo "\n";

// Soal 4
// output: 1 5 * 9 13 * 17
$n = 1;
for ($i = 1; $i <= 17; $i += 4) {
    echo $i . " ";
    if ($n % 2 == 0) {
        echo "* ";
    }
    $n++;
}
echo "\n";


// Soal 5
// output: 1 5 * 13 17 * 25
$n = 1;
for ($i = 1; $i <= 25; $i += 4) {
    if ($n % 3 == 0) {
        echo "* ";
    } else {
        echo $i . " ";
    }
    $n++;
}
echo "\n";

// Soal 6
// output: 3 9 27 81 243 729 2187
for ($i = 1; $i <= 7; $i++) {
    $result = pow(3, $i);
    echo $result . " ";
}
echo "\n";

// Soal 7
// output: 4 16 * 64 256 * 1024
for ($i = 1; $i <= 5; $i++) {
    $result = pow(4, $i);
    echo $result . " ";
    if ($i % 2 == 0) {
        echo "* ";
    }
}
echo "\n";

// Soal 8
// output: 3 9 27 xxx 243 729 2187
for ($i = 1; $i <= 7; $i++) {
    $result = pow(3, $i);
    if ($i % 4 == 0) {
        echo "xxx ";
    } else {
        echo $result . " ";
    }
}
echo "\n";

// Credits by : Me
