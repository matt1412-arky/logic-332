<?php
    /*
    *********************************************
    PHP List()
    list adalah function yang digunakan untuk memasukan nilai kedalam list dalam sekali operasi
    *********************************************
    */

    $fruit = array("Mango", "Pineapple", "Orange");
    /*
    $a = $fruit[0];
    $b = $fruit[1];
    $c = $fruit[2];
    */
    list($a, $b, $c) = $fruit;  //mempermudah assignment isi dari array ke variable
    echo("Buah buahan didalam array fruit adalah: $a, $b, $c\n");

    list($a, , $c) = $fruit;
    echo("Buah buahan didalam array fruit adalah: $a, $c\n");
    
    array_push($fruit, "Apple", "Banana");
    print_r($fruit);
    
?>