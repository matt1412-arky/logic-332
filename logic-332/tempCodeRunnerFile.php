<?php
 /*
    2. jika i genap maka j ganjil
        1 3 5
        2 4 6
        7 9 11
    */
    
    $n = 3;
    $ganjil = 1;
    $genap = 0;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if (($i % 2) != 0) {
                echo ($ganjil . " ");
                $ganjil += 2;
            } elseif ($i % 2 == 0) {
                $genap += 2;
                echo (($genap) . " ");
            }
        }
        echo "\n";
    }

?>