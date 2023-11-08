<?php
$a = 5;
$b = "3.5";

$name = "Cahyadi";
//CamelCase


echo "hasil : ".($a + $b)."\n"; //conversi secara implisit
echo "hasil : ".($a + (int)$b)."\n"; //conversi secara eksplisit

//var_dump() untuk melihat tipe data
var_dump ($a + $b);
var_dump($a + (int)$b);
var_dump(($a + $b)."");


?>