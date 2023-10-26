<?php
//Tukar menjadi nilai a menjadi nilai b dan sebaliknya.
$a = 100;
$b = 200;

/*
$temp = $a;
$a = $b;
$b = $temp;
*/
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "nilai a : " . $a . "\n";
echo "nilai b : " . $b;
