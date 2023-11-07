<?php

/* list pada php dapat ditambah dan dikurangi secara bebas, tpi contoh pada array jumlah baris dan kolom tidak dapat diubah

PHP list()   -> semua yng ada () adalah sebuah function
list adalah function yang digunakan untuk memasukan nilai kedalam list dalam sekali operasi
*/

$fruit = array("Mango","Pineapple", "Orange");

//secara manual
//$a = $fruit[0];
//$b = $fruit[1];
//$c = $fruit[2];


list($a,$b,$c)= $fruit;             //mempermudah assigment isi dari array ke variabel
echo("Buah buahan didalam array fruit adalah $a, $b, $c \n");
list($a,$b)= $fruit;
echo("Buah buahan didalam array fruit adalah $a, $b \n");

// untuk menambahkan array dapat menggunakan comment array_push

array_push($fruit, "apple","banana");
print_r($fruit);
?>