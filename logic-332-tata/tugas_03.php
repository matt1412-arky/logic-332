<?php
    // 1. pattern 1, 3, 5, 7, 9, 11, 13
    $x = 1;
    for($i = 1; $i <= 7; $i++){
        echo "$x ";
        $x += 2;
    } 
    echo "\n";

    // 2. pattern 1, 4, 7, 10, 13, 16, 19
    $x = 1;
    for($i = 1; $i <= 7; $i++){
        echo "$x ";
        $x += 3;
    }
    echo "\n";

    // 3. pattern 1, 5, 9, 13, 17, 21, 25
    $x = 1;
    for($i = 1; $i <= 7 ; $i++){
        echo "$x ";
        $x += 4;
    }
    echo "\n";

    // 4. pattern 1, 5, *, 9, 13, *, 17
    $x = 1;
    for($i = 1; $i <= 7; $i += 1){
        echo "$x ";
        $x += 4;
        if($i % 2 == 0){
            echo "* ";
        } elseif($x > 17){
            break;
        }
    }
    echo "\n";

    // 5. pattern 1, 5, *, 13, 17, *, 25
    $x = 1;
    for($i = 1; $i <= 7; $i += 1){
        if($i % 3 == 0){
            echo "* ";
        } else{
            echo "$x ";
        }
        $x += 4;
    }
    echo "\n";

    // 6. pattern 3, 9, 27, 81, 243, 729, 2187
    $x = 3;
    for ($i = 1; $i <= 7; $i++){
        echo "$x ";
        $x *= 3;
    }
    echo "\n";

    // 7. pattern 4, 16, *, 64, 256, *, 1024
    $x = 4;
    for($i = 1; $i <= 7; $i += 1){
        echo "$x ";
        
        if($i % 2 == 0){
            echo "* ";
        } elseif($x == 1024){
            break;
        }
        $x *= 4;
    }
    echo "\n";

    // 8. pattern 3, 9, 27, xxx, 243, 729, 2187
    $x = 3;
    for($i = 1; $i <= 7; $i += 1){
        if($i % 4 == 0){
            echo "xxx ";
        } else{
            echo "$x ";
        }
        $x *= 3;
    }
    echo "\n" . "\n";

    // Tugas Matrix
    // 1. Buat Matrix dinamis isi bilangan ganjil dari 15 - n
    echo "1. Buat Matrix dinamis isi bilangan ganjil dari 15 - n! \n";

    $n = 3; $x = 15;
    echo "   dimensi matriks n = $n x $n: \n";
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            echo "$x ";
            $x += 2;
        }
        echo "\n";
    }
    echo "\n";

    /* 2. buat matriks seperti dibawah
        1 3 5
        2 4 6
        7 9 11
    */
    echo "2. Buat Matrix seperti dibawah!\n| 1 3 5  |\n| 2 4 6  |\n| 7 9 11 |\n";

    $n = 3; $x_genap = 2; $x_ganjil = 1;
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            if($i % 2 == 0){
                echo "$x_genap ";
                $x_genap += 2;
            } else{
                echo "$x_ganjil ";
                $x_ganjil += 2;
            }
        }
        echo "\n";
    }
    echo "\n";

    /* 3. buat matriks seperti dibawah
        A A A A A A
        D         B
        D         B
        D         B
        C C C C C C
    */
    echo "2. Buat Matrix seperti comment!\n";

    $n = 5;
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            switch($i){
                case $i == 1:
                    echo "A ";
                    break;
                case $i == $n:
                    echo "C ";
                    break;
                case $j == $n && $j >= $i:
                    echo "B ";
                    break;
                case $j == 1 && $j <= $i:
                    echo "D ";
                    break;
                default:
                    echo "  ";
                    break;
            }
        }
        echo "\n";
    }
    echo "\n";

    // 4. Buat matriks time table
    echo "4. Buat Matrix time table!\n";
    $n = 12;
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            echo $i * $j . " ";
        }
        echo "\n";
    }
?>