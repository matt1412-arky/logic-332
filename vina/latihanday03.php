<?php

//tukar nilai a menjadi nilai b dan sebaliknya
//tidak boleh menambahkan variabel apapun 

$a = 100;
$b = 200;

/*
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
*/

$a = $a - $b;
$b = $a + $b;
$a = $b - $a;

echo "nilai a : " . $a . "\n";
echo "nilai b : " . $b . "\n";


?>