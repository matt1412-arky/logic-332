<?php

    /*Tukar nilai a menjadi nilai b dan sebaliknya.
    Constraint: Tidak boleh menambahkan variabel apapun itu.*/
    $a = 5;
    $b = 3;

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "Nilai a : ".$a."\n";
    echo "Nilai b : ".$b;



?>