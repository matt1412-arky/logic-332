<?php

    $a = 5;
    $b = 3;

    // 1. Tukar nilai a menjadi nilai b dan sebaliknya. (tidak tambah variable)
    
    $a += $b; // a = a + b -> 5 + 3 = 8
    $b = $a - $b; // b = a - b -> 8 - 3 = 5    
    $a = $a - $b; // a = a - b -> 8 - 5 = 3

    echo "nilai a: " . $a . "\n";
    echo "nilai b: " . $b . "\n";

?>