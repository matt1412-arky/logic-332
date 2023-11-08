<?php
    /* Tukar nilai a menjadi nilai b dan sebaliknya.
    
    Constraint: Tidak boleh menambahkan variable apapun itu*/
    $a = 5;
    $b = 3;

    //logic tulis dibawah ini
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    
    echo "Nilai a: ".$a."\n";
    echo "Nilai b: ".$b."\n";
?>