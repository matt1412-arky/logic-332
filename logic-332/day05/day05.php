<?php

    /*
    11 12 13
    12 22 23
    13 32 33
    */
    for($i=1; $i<=3; $i++) { //di loop terlebih dahulu (baris)
        for($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            echo ($i.$j." ");
        }
        echo "\n";
    }
    echo "\n";
    
    /*
    9 8 7
    6 5 4
    3 2 1
    */
    $temp = 9;
    for($i=1; $i<=3; $i++) { //di loop terlebih dahulu (baris)
        for($j=1; $j<=3; $j++) { //di loop sampai selesai (kolom)
            echo ($temp." ");
            $temp--;
        }
        echo "\n";
    }
    echo "\n";
    /*
    A B C
    C B A
    D E F
    */
    
    /*
    0 0 0
    0 X 0
    0 0 0
    */
    $n=3;
    
    for ($i=0; $i<$n; $i++) {     
        for ($j=0; $j<$n; $j++) {
            if ($i == $j && $i == ($n - 1) / 2) {
                echo "x ";
            } else {
                echo "0 ";
            }
        }
        echo "\n";
    }
    echo "\n";

    /*
    x y *
    z * y
    * z x
    */
    $n=3;
    for ($i=1; $i<=$n; $i++) {
        for ($j=1; $j<=$n; $j++) {
            if (($i+$j) == ($n+1)) {
                echo "* ";
            }
            elseif ($i == $j) {
                echo "x ";
            }
            elseif ($i < $j) {
                echo "y ";
            }
            elseif ($i > $j) {
                echo "z ";
            }
            else 
            echo (" ");
        }
        echo "\n";
    }
    echo "\n";


    /*
    Tugas:
    1. buat matrix dinamis dengan isi bilangan ganjil dari 15 - n
    */

    $n=3;
    $h=15;
    for($i=1; $i<=$n; $i++) {
        for($j=1; $j<=$n; $j++) {
            echo ("$h ");
            $h+=2;
        }
        echo "\n";
    }
    echo "\n";

    /*
    2. jika i genap maka j ganjil
        1 3 5
        2 4 6
        7 9 11
    */
    
    $n=3;
    $odd = 1;
    $even = 0;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if (($i % 2) != 0) {
                echo ($odd . " ");
                $odd += 2;
            } elseif ($i % 2 == 0) {
                $even += 2;
                echo (($even) . " ");
            }
        }
        echo "\n";
    }
    echo "\n";

    /*
    3. 
        A A A A A
        D       B
        D       B
        D       B
        C C C C C
    */
    $u=5;
    for ($i=0; $i<$u; $i++) {
        for ($j=0; $j<$u; $j++) {
            if ($i == 0) {
                echo "A ";
            } elseif ($i == $u - 1) {
                echo "C ";
            } elseif ($j == 0) {
                echo "D ";
            } elseif ($j == $u - 1) {
                echo "B ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
    echo "\n";

    
    /*
    4. Times table
    */

    $n = 5;    
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo ($i * $j) . " ";
        }
        echo "\n";
    }



?>